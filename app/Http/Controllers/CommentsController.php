<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use Illuminate\Support\Facades\Session;

class CommentsController extends Controller
{
    public function __construct() {
        $this->middleware('auth', ['except'=>'store']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $post_id)
    {
        $this->validate($request, [
            'name'=> 'required|max:255',
            'email'=> 'required|email|max:255',
            'comment'=> 'required|min:5|max:2000'
        ]);

        $post= Post::find($post_id);

        $comment= new Comment();
        $comment->name= $request->name;
        $comment->email= $request->email;
        $comment->comment= $request->comment;
        $comment->approved= true;
        $comment->post()->associate($post);

        $comment->save();

        Session::flash('success', 'Comment successfully created');

        return redirect()->route('blog.show', [$post->slug]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    
    public function delete ($id) {
        $comment= Comment::find($id);
        return view('admin.comments.delete', ['comment'=>$comment]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment= Comment::find($id);
        $post_id= $comment->post->id;
        
        $comment->delete();

        Session::flash('success', 'Comment successfully deleted');

        return redirect()->route('admin.posts.show', $post_id); 
    }
}
