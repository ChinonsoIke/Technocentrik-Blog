<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PagesController extends Controller
{
    public function index () {
        $posts= Post::orderBy('id', 'desc')->paginate(10);
        return view ('pages.index', ['posts'=>$posts]);
    }

    public function contact () {
        return view('pages.contact');
    }

    public function about () {
        return view('pages.about');
    }
}
