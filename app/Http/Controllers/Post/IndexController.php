<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request):View
    {
        // view名では.を使いディレクトリ指定するのが基本
        return view('post.index')
            ->with('name', 'laravel')
            ->with('version', 12);
    }
}
