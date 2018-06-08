<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class PagesController extends Controller
{
    public function voetbal(){
        $title = 'Voetbal';
        return view('pages.voetbal')->with('title', $title);
    }
    public function basketball(){
        $data = array(
            'title' => 'Basketball',
        );
        return view('pages.basketball')->with($data);
    }
}