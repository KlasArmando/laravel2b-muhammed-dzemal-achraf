@extends('layouts.app')
@section('content')

    @foreach($cruds as $crud)

        <p><strong>Name:</strong>{{$crud->name}}</p>

        <p><strong>Chat:</strong>{{$crud->body}}<p>

            <a href="{{url("crud/" . $crud->id)}}"><button>View Comment</button></a>

        <hr />
    @endforeach

    @endsection