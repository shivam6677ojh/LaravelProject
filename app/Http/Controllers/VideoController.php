<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class VideoController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->string('q')->value() ?: 'morning yoga for beginners';
        $apiKey = config('services.youtube.key');
        $videos = [];
        $error = null;

        if ($apiKey) {
            $response = Http::get('https://www.googleapis.com/youtube/v3/search', [
                'part' => 'snippet',
                'q' => $query,
                'maxResults' => 9,
                'type' => 'video',
                'key' => $apiKey,
            ]);

            if ($response->successful()) {
                $items = $response->json('items', []);
                $videos = collect($items)->map(function (array $item) {
                    return [
                        'id' => data_get($item, 'id.videoId'),
                        'title' => data_get($item, 'snippet.title'),
                        'description' => data_get($item, 'snippet.description'),
                        'thumbnail' => data_get($item, 'snippet.thumbnails.high.url')
                            ?: data_get($item, 'snippet.thumbnails.medium.url'),
                        'channel' => data_get($item, 'snippet.channelTitle'),
                    ];
                })->filter(fn ($video) => ! empty($video['id']))->values()->all();
            } else {
                $error = 'Unable to fetch videos from YouTube right now.';
            }
        } else {
            $error = 'Add YOUTUBE_API_KEY in .env to enable live video search.';
        }

        return view('videos.index', compact('videos', 'query', 'error'));
    }
}
