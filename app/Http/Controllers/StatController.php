<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Stat;

class StatController extends Controller
{

    public function searchcontent(){

        $stat = Stat::where('name', 'LIKE', '%' . request('name') .'%')->get();
        return view('searchcontent',compact('stat'));
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin', ['except' => ['index', 'show', 'searchcontent']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stats = Stat::orderBy('created_at','desc')->paginate(10);
        return view('stats.index', compact('stats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stats.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $stat = $this->validate(request(), [
            'name' => 'required',
            'nation' => 'required'
        ]);

        Stat::create($stat);

        return back()->with('success', 'Stat has been added');;
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
        $stat = Stat::find($id);

        // Check for correct user


        return view('stats.edit',compact('stat','id'));
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
        $stat = Stat::find($id);
        $this->validate(request(), [
            'name' => 'required',
            'nation' => 'required'
        ]);
        $stat->name = $request->get('name');
        $stat->nation = $request->get('nation');
        $stat->save();
        return redirect('stats')->with('success','Stats has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stat = Stat::find($id);
        $stat->delete();
        return redirect('stats')->with('success','Stats has been  deleted');
    }
}
