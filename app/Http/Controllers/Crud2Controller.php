<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Crud;


class Crud2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cruds = Crud::all();
        return view('chatroom.chat.allcrud2')->withCruds($cruds);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('chatroom.chat.create');
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
        $crud = new Crud;

        $crud->body = $request->body;
        $crud->name = $request->name;
        $crud->email = $request->email;

        $crud->save();

        return redirect()->route('crud.show', $crud->id);

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
        $crud = Crud::find($id);
        return view('chatroom.chat.show2')->withCrud($crud);
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
        $crud = Crud::find($id);
        // return the view and pass in the var we previously created
        return view('chatroom.chat.edit')->withCrud($crud);
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
        $crud = Crud::find($id);

        $crud->body = $request->input('body');

        $crud->save();

        //redirect
        return redirect()->route('crud.show', $crud->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $crud = Crud::find($id);
        $crud->delete();
        return redirect()->route('crud.index');
    }
}
