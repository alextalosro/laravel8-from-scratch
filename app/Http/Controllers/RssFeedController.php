<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class RssFeedController extends Controller
{
    public function create()
    {
        $posts = Post::orderBy('created_at', 'desc')
            ->where('is_published', '=', 1)
            ->get();

        return response()->view('feed.rssfeed', compact('posts'))->header('Content-Type', 'application/xml');

    }
}
