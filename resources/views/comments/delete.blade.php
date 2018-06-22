@extends('layouts.app')
@section('content')

    <div>
    <h1>DELETE THIS COMMENT?</h1>
    <p>
       <strong>Name:</strong>   {{ $comment->name }}<br>
        <strong>Email:</strong>   {{ $comment->email }}<br>
        <strong>Comment:</strong>   {{ $comment->comment }}<br>
    </p>

    {{ Form::open(['route' => ['comments.destroy', $comment->id], 'method'  => 'DELETE']) }}
        {{ Form::submit('YES, delete comment') }}
    {{ Form::close() }}
</div>

    @endsection