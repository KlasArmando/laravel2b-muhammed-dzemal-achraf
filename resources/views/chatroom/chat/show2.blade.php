@extends('layouts.app')
    @section('content')
<p class="lead">{{ $crud->body }}</p>

{!! Html::linkRoute('crud.edit', 'Edit', array($crud->id)) !!}



{!! Form::open(['route' => ['crud.destroy', $crud->id], 'method' => 'DELETE']) !!}
{!! Form::submit('Delete') !!}
{!! Form::close() !!}

@endsection


