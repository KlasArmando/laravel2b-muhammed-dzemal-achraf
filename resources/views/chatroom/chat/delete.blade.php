@extends('layouts.app')
@section('content')

{!! Form::open(['route' => ['comments.destroy', $crud->id], 'method' => 'DELETE']) !!}
{!! Form::submit('Delete') !!}
{!! Form::close !!}

    @endsection