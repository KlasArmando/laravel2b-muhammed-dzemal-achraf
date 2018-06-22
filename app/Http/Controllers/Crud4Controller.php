<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Crud4;


class Crud4Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show', 'create', 'nieuws', ]]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cruds4 = Crud4::all();
        return view('chatroom.basketballchat.allcrud4')->withCruds4($cruds4);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('chatroom.basketballchat.create');
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
        $crud4 = new Crud4;

        $crud4->body = $request->body;
        $crud4->name = $request->name;
        $crud4->email = $request->email;

        $crud4->save();

        return redirect()->route('crud4.show', $crud4->id);

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
        $crud4 = Crud4::find($id);
        return view('chatroom.basketballchat.show4')->withCrud4($crud4);
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
        $crud4 = Crud4::find($id);
        // return the view and pass in the var we previously created
        return view('chatroom.basketballchat.edit')->withCrud4($crud4);
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
        $crud4 = Crud4::find($id);

        $crud4->body = $request->input('body');

        $crud4->save();

        //redirect
        return redirect()->route('crud4.show', $crud4->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $crud4 = Crud4::find($id);
        $crud4->delete();
        return redirect()->route('crud4.index');
    }
}
