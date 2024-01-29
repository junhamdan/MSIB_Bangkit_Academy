import googleapiclient.discovery
import googleapiclient.errors
from config import DEVELOPER_KEY

class Youtube:
  def __init__(self):
    self.api_service_name = "youtube"
    self.api_version = "v3"
    self.developer_key = DEVELOPER_KEY

  def crawl(self, video_id):
    youtube = googleapiclient.discovery.build(
    self.api_service_name, self.api_version, developerKey=self.developer_key)

    request = youtube.commentThreads().list(
      part="snippet",
      videoId=video_id,
      maxResults=100
    )
    response = request.execute()

    results = []

    for item in response['items']:
      comment = item['snippet']['topLevelComment']['snippet']
      results.append({
          "author": comment['authorDisplayName'],
          "published_at": comment['publishedAt'],
          "updated_at": comment['updatedAt'],
          "like_count": comment['likeCount'],
          "comment": comment['textDisplay']
      })
    
    return results