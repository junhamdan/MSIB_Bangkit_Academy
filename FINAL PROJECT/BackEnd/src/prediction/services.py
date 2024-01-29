from typing import List
from .schemas import PlaystoreRequest, YoutubeRequest, NewsRequest
import os
from keras.models import load_model
from keras.preprocessing.text import Tokenizer
from keras.preprocessing.sequence import pad_sequences
import numpy as np
import pickle
import nltk
from nltk.corpus import stopwords
import re
import pandas as pd
import matplotlib.pyplot as plt
from wordcloud import WordCloud


current_directory = os.path.dirname(os.path.realpath(__file__))
playstore_model_path = os.path.join(current_directory, 'ml-model', 'model_playstore_v5.h5')
youtube_model_path = os.path.join(current_directory, 'ml-model', 'model_youtube_v7.h5')
news_model_path = os.path.join(current_directory, 'ml-model', 'model_news_v5.h5')
kamus_alay_path = os.path.join(current_directory, 'csv', 'new_kamusalay.csv')

# Load the model from the .pkl file
# with open(news_model_path, 'rb') as file:
#     loaded_model = pickle.load(file)

class PredictionService:
  def __init__(self, base_url):
    nltk.download('punkt')
    nltk.download('stopwords')
    self.playstore_model = load_model(playstore_model_path, compile=False)
    self.youtube_model = load_model(youtube_model_path, compile=False)
    self.news_model = load_model(news_model_path, compile=False)
    self.youtube_tokenizer = Tokenizer(num_words=5000, oov_token="<OOV>")
    self.playstore_tokenizer = Tokenizer(num_words=20000, oov_token="<OOV>")
    self.news_tokenizer = Tokenizer(num_words=10000, oov_token="<OOV>")
    self.base_url = base_url
    
    alay_dict = pd.read_csv(kamus_alay_path, names=['original', 'replacement'], encoding='latin-1')
    self.alay_dict_map = dict(zip(alay_dict['original'], alay_dict['replacement']))
  
  def playstore_predict(self, data: List[PlaystoreRequest]):
    result = []
    reviews = []
    positive_count = 0
    negative_count = 0

    for datum in data:
      self.playstore_tokenizer.fit_on_texts(datum.review)
      sequences = self.playstore_tokenizer.texts_to_sequences(datum.review)
      padded = pad_sequences(sequences, padding='post', maxlen=100, truncating='post')
      prediction = self.playstore_model.predict(padded)
      pred_label = 1 if prediction[0][0] > 0.5 else 0
      sentiment = "Positive" if pred_label == 1 else "Negative"

      if sentiment == 'Positive':
        positive_count += 1
      else:
        negative_count += 1

      reviews.append(datum.review)  
      result.append({
        "user": datum.user,
        "review": datum.review,
        "score": datum.score,
        "thumbs_up_count": datum.thumbs_up_count,
        "submitted_at": datum.submitted_at,
        "sentiment": sentiment
      })

    wordcloud_url = self.generateWordCloud(reviews)
    piechart_url = self.generatePieChart([positive_count, negative_count])

    return {
      'status': 'success',
      'predictions': result,
      'wordcloud_url': wordcloud_url,
      'piechart_url': piechart_url,
      'positive_count': positive_count,
      'negative_count': negative_count
    }
  
  def youtube_predict(self, data: List[YoutubeRequest]):
    result = []
    comments = []
    positive_count = 0
    negative_count = 0

    for datum in data:
      self.youtube_tokenizer.fit_on_texts(datum.comment)
      sequences = self.youtube_tokenizer.texts_to_sequences([datum.comment])
      padded = pad_sequences(sequences, padding='post', maxlen=50)
      predictions = self.youtube_model.predict(padded)
      pred_label = 1 if predictions[0][0] >= 0.5 else 0
      sentiment = "Positive" if pred_label >= 0.5 else "Negative"

      if sentiment == 'Positive':
        positive_count += 1
      else:
        negative_count += 1

      comments.append(datum.comment)
      result.append({
        "author": datum.author,
        "published_at": datum.published_at,
        "updated_at": datum.updated_at,
        "like_count": datum.like_count,
        "comment": datum.comment,
        "sentiment": sentiment
      })

    wordcloud_url = self.generateWordCloud(comments)
    piechart_url = self.generatePieChart([positive_count, negative_count])

    return {
      'status': 'success',
      'predictions': result,
      'wordcloud_url': wordcloud_url,
      'piechart_url': piechart_url,
      'positive_count': positive_count,
      'negative_count': negative_count
    }
  
  def news_predict(self, data: List[NewsRequest]):
    result = []
    titles = []
    positive_count = 0
    negative_count = 0
    
    for datum in data:
      text_to_predict = self.__remove_symbols(datum.title)
      text_to_predict = self.__normalize_alay(text_to_predict, self.alay_dict_map)
      tokenized_text = self.__tokenized(pd.Series([text_to_predict]))
      filtered_text = self.__remove_stopwords(tokenized_text.iloc[0])

      self.news_tokenizer.fit_on_texts([filtered_text])
      text_seq = self.news_tokenizer.texts_to_sequences([filtered_text])
      text_pad = pad_sequences(text_seq, maxlen=22, padding='post', truncating='post')
      predictions = self.news_model.predict(text_pad)
      pred_label = 1 if predictions[0][0] > 0.5 else 0
      sentiment = "Positive" if pred_label == 1 else "Negative"

      if sentiment == 'Positive':
        positive_count += 1
      else:
        negative_count += 1

      titles.append(datum.title)
      result.append({
        "title": datum.title,
        "source": datum.source,
        "link": datum.link,
        "published_date": datum.published_date,
        "sentiment": sentiment
      })

    wordcloud_url = self.generateWordCloud(titles)
    piechart_url = self.generatePieChart([positive_count, negative_count])

    return {
      'status': 'success',
      'predictions': result,
      'wordcloud_url': wordcloud_url,
      'piechart_url': piechart_url,
      'positive_count': positive_count,
      'negative_count': negative_count
    }

  def __remove_symbols(self, text):
    text = text.lower()
    return re.sub(r'[^a-zA-Z0-9\s]', '', text)

  def __normalize_alay(self, text, alay_dict_map):
      return ' '.join([alay_dict_map[word] if word in alay_dict_map else word for word in text.split(' ')])

  def __tokenized(self, data):
      return data.apply(nltk.word_tokenize)

  def __remove_stopwords(self, tokens):
      stop_words = set(stopwords.words('indonesian'))
      return [word for word in tokens if word not in stop_words]

  def generateWordCloud(self, text_data: List[str]):
      all_words = " ".join(text_data)
      wordcloud = WordCloud(width=800,
                            height=400,
                            max_words=200,
                            colormap='plasma',
                            background_color='white',
                            stopwords=stopwords.words('indonesian')).generate(all_words)
      plt.figure(figsize=(15, 10), facecolor='white')
      plt.imshow(wordcloud, interpolation='bilinear')
      plt.axis('off')
      plt.savefig('static/wordcloud.png')

      return f'{self.base_url}static/wordcloud.png'

  def generatePieChart(self, sentiment_counts: List[int]):
     plt.figure(figsize=(8, 6))
     plt.pie(sentiment_counts, labels=['Positive', 'Negative'], autopct='%1.1f%%')
     plt.axis('off')
     plt.savefig('static/piechart.png')

     return f'{self.base_url}static/piechart.png'
     