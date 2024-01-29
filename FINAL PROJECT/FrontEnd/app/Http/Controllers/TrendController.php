<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class TrendController extends Controller
{
    private $api_key;

    public function __construct()
    {
        $this->api_key = 'AIzaSyBFEjt_AUqGSN1NueASUZAw0PjcWxXnFcw';
    }

    public function getPopularVideos()
    {
        $client = new Client();

        $response = $client->get("https://www.googleapis.com/youtube/v3/videos", [
            'query' => [
                'part' => 'snippet,contentDetails,statistics',
                'chart' => 'mostPopular',
                'regionCode' => 'ID', // Kode wilayah untuk Indonesia
                'maxResults' => 12,
                'key' => $this->api_key,
            ],
        ]);

        $videos = json_decode($response->getBody()->getContents(), true);
        $videos = $videos['items'];
        return $videos;
    }

    public function getTrendGoogle()
    {
        $url = 'https://indo-pytrends-muf7kziviq-as.a.run.app/trending';

        $response = Http::get($url);

        // Periksa apakah permintaan berhasil
        if ($response->successful()) {
            $result = json_decode($response->getBody(), true);
            $trendResult = $result['data']['trending_queries'];

            return $trendResult;
        } else {
            // Tampilkan notifikasi error di frontend jika terjadi kesalahan saat mengambil berita
            return null;
        }
    }

    public function getTrends()
    {
        // Get Google Trends
        $googleTrends = $this->getTrendGoogle();

        // Get Youtube Popular Videos
        $youtubeTrends = $this->getPopularVideos();

        return view('/pages/trending', compact('googleTrends', 'youtubeTrends'));
    }
}