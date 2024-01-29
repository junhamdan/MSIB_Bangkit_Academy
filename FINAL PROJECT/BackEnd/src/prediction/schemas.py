from typing import List
from pydantic import BaseModel

class InputBase(BaseModel):
  sentence: str

class InputList(BaseModel):
  sentences: List[str]

class YoutubeRequest(BaseModel):
  author: str
  published_at: str
  updated_at: str
  like_count: int
  comment: str

class PlaystoreRequest(BaseModel):
  user: str
  review: str
  score: int
  thumbs_up_count: int
  submitted_at: str

class NewsRequest(BaseModel):
  title: str
  source: str
  link: str
  published_date: str

class YoutubeList(BaseModel):
  data: List[YoutubeRequest]

class PlaystoreList(BaseModel):
  data: List[PlaystoreRequest]

class NewsList(BaseModel):
  data: List[NewsRequest]

