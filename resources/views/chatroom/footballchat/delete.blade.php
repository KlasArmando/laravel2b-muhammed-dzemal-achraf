@extends('layouts.app')
@section('content')

{!! Form::open(['route' => ['crud3.destroy', $crud3->id], 'method' => 'DELETE']) !!}
{!! Form::submit('Delete') !!}
{!! Form::close !!}

    @endsection