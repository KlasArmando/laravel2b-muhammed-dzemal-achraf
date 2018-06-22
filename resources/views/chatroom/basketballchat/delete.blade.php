@extends('layouts.app')
@section('content')

{!! Form::open(['route' => ['crud4.destroy', $crud4->id], 'method' => 'DELETE']) !!}
{!! Form::submit('Delete') !!}
{!! Form::close !!}

    @endsection