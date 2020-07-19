<?php

namespace App\Http\ViewComposers;

use App\Post;
use Illuminate\View\View;

// class PostComposer
// {
    
//     /**
//      * Create a movie composer.
//      *
//      * @return void
//      */
//     public function __construct()
//     {
//         $posts = Post::orderBy('id', 'desc')->limit(3)->get();
//     }

//     /**
//      * Bind data to the view.
//      *
//      * @param  View  $view
//      * @return void
//      */
//     public function compose(View $view)
//     {
//         $view->with('posts', $posts);
//     }
// }