<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;


class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request):View
    {
        $posts = Post::all();
        // view名では.を使いディレクトリ指定するのが基本
        return view('post.index')
            ->with('posts', $posts);
    }
}
