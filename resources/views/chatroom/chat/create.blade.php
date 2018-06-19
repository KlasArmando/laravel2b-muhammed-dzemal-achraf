@extends('layouts.app')
@section('content')

{!! Form::open(['route' => 'crud.store']) !!}

{{Form::label('name', 'Name:')}}
{{Form::text('name', null)}}

{{Form::label('email', 'Email:')}}
{{Form::text('email', null)}}

{{Form::label('body', 'Chat:')}}
{{Form::text('body', null)}}

{{Form::submit('Submit comment')}}

{!! Form::close() !!}

<a href="crud"><button>View all comments</button></a>


@endsection
