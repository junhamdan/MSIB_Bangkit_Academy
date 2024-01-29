from google_play_scraper import app
from google_play_scraper import Sort, reviews

class Playstore:
  def crawl(self, package_name):
    playstore_reviews, _ = reviews(
      package_name,
      lang='id',
      country='id',
      sort=Sort.MOST_RELEVANT,
      count=100,
      filter_score_with=5
    )

    results = []

    for playstore_review in playstore_reviews:
      results.append({
        "user": playstore_review["userName"],
        "review": playstore_review["content"],
        "score": playstore_review["score"],
        "thumbs_up_count": playstore_review["thumbsUpCount"],
        "submitted_at": playstore_review["at"]
      })

    return results