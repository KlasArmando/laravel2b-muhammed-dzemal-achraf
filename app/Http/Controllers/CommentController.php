<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Comment;


class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $comments = Comment::all();
        return view('pages.allcomments')->withComments($comments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('partials.commenthere');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate the data
        $this->validate($request, array(
            'body' => 'required|max:1000',
        ));

        //store in the database
        $comment = new Comment;

        $comment->body = $request->body;

        $comment->save();

        return redirect()->route('comments.show', $comment->id);

        //redirect to another page
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //page to show review
        $comment = Comment::find($id);
        return view('partials.show')->withComment($comment);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // find the post in the Database and save as var
        $comment = Comment::find($id);
        // return the view and pass in the var we previously created
        return view('partials.editcomment')->withComment($comment);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //validate the data
        $this->validate($request, array(
            //'body' => 'required|max1000',
        ));
        //save data to databases
        $comment = Comment::find($id);

        $comment->body = $request->input('body');

        $comment->save();

        //redirect
        return redirect()->route('comments.show', $comment->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = Comment::find($id);
        $comment->delete();
        return redirect()->route('comments.index');
    }
}
