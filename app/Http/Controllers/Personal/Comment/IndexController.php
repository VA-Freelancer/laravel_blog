<?php

namespace App\Http\Controllers\Personal\Comment;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $current_time = Carbon::now()->year;
        $comments = auth()->user()->comments;
        return view('personal.comment.index', compact( 'current_time', 'comments'));
    }
}
