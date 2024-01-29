from typing import List
from fastapi import APIRouter
from fastapi.requests import Request
from .services import PredictionService
from .schemas import PlaystoreList, YoutubeList, NewsList

router = APIRouter(
  prefix="/predict",
  tags=["predict"]
)

@router.post("/playstore")
async def playstore_prediction(data: PlaystoreList, request: Request):
  return PredictionService(request.base_url).playstore_predict(data.data)

@router.post("/youtube")
async def youtube_prediction(data: YoutubeList, request: Request):
  return PredictionService(request.base_url).youtube_predict(data.data)

@router.post("/news")
async def news_prediction(data: NewsList, request: Request):
  return PredictionService(request.base_url).news_predict(data.data)