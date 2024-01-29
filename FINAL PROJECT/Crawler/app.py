import os
from flask import Flask, request, jsonify
from flask_cors import CORS, cross_origin
from news import News
from playstore import Playstore
from youtube import Youtube
from config import PORT

app = Flask(__name__)
CORS(app, origins="*")

news = News()
playstore = Playstore()
youtube = Youtube()

@app.route("/crawl/youtube", methods=["POST"])
@cross_origin()
def crawl_youtube():
  video_id = request.json["video_id"]
  result = youtube.crawl(video_id)
  return jsonify(
    video_id=video_id,
    result=result
  )

@app.route("/crawl/playstore", methods=["POST"])
@cross_origin()
def crawl_playstore():
  package_name = request.json["package_name"]
  result = playstore.crawl(package_name)
  return jsonify(
    package_name=package_name,
    result=result
  )

@app.route("/crawl/news", methods=["GET"])
@cross_origin()
def crawl_news():
  result = news.crawl()
  return jsonify(
    result=result
  )

@app.route("/")
@cross_origin()
def status():
  return "Hello World"

if __name__ == "__main__":
  app.run(debug=True,
          host="0.0.0.0",
          port=int(os.environ.get("PORT", 8080)))