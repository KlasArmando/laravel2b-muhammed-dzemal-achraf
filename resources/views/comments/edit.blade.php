@extends('layouts.app')
@section('content')

    {{Form::model($comment, ['route' => ['comments.update', $comment->id], 'method' => 'PUT'])  }}

    {{Form::label('name', 'Name:')}}
    {{Form::text('name', null, ['disabled' => ''] )}}

    {{Form::label('email', 'Email:')}}
    {{Form::text('email', null, ['disabled' => ''] )}}

    {{Form::label('comment', 'Comment:')}}
    {{Form::text('comment', null )}}

    {{Form::submit('Update Comment')}}

{{Form::close() }}

    @endsection