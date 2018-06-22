<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Crud3;


class Crud3Controller extends Controller
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
        $cruds3 = Crud3::all();
        return view('chatroom.footballchat.allcrud3')->withCruds3($cruds3);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('chatroom.footballchat.create');
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
        $crud3 = new Crud3;

        $crud3->body = $request->body;
        $crud3->name = $request->name;
        $crud3->email = $request->email;

        $crud3->save();

        return redirect()->route('crud3.show', $crud3->id);

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
        $crud3 = Crud3::find($id);
        return view('chatroom.footballchat.show3')->withCrud3($crud3);
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
        $crud3 = Crud3::find($id);
        // return the view and pass in the var we previously created
        return view('chatroom.footballchat.edit')->withCrud3($crud3);
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
        $crud3 = Crud3::find($id);

        $crud3->body = $request->input('body');

        $crud3->save();

        //redirect
        return redirect()->route('crud3.show', $crud3->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $crud3 = Crud3::find($id);
        $crud3->delete();
        return redirect()->route('crud3.index');
    }
}
