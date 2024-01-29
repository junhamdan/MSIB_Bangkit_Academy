from bs4 import BeautifulSoup
import requests

class News:
  def __init__(self):
    self.url = "https://news.google.com/rss?hl=id&gl=ID&ceid=ID:id"

  def crawl(self):
    xml_page = requests.get(self.url).content
    soup_page = BeautifulSoup(xml_page, "xml")
    news_items = soup_page.find_all("item")

    filtered_news = []

    for item in news_items:
      title = item.title.text if item.title else "N/A"
      link = item.link.text if item.link else "N/A"
      pub_date = item.pubDate.text if item.pubDate else "N/A"

      if (title != "N/A"):
        title_data = title.split(' - ')
        title = title_data[0] if title_data[0] else "N/A"
        title = title.split(' | ')[0]
        source = title_data[1] if title_data[1] else "N/A"
        filtered_news.append({
          "title": title,
          "source": source,
          "link": link,
          "published_date": pub_date
        })
    
    return filtered_news