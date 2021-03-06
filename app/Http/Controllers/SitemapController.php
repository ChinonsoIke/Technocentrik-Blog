<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Post;
use Illuminate\Http\Request;


class SitemapController extends Controller
{
    
    public function index(Request $r)
    {
       
        $posts = Post::orderBy('id','desc');

        return response()->view('sitemap', compact('posts'))
          ->header('Content-Type', 'text/xml');

    }
}