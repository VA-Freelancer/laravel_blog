<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = Post::paginate(2);
        $randomPosts = Post::inRandomOrder()->limit(4)->get();
        $likedPosts = Post::withCount('likedUsers')->orderBy('liked_users_count', 'DESC')->get()->take(4);
        return view('main.index', compact('posts', 'randomPosts', 'likedPosts'));
    }
}
