@extends('layouts.app')
    @section('content')
        <div class="posts">
<p class="lead">{{ $crud->body }}</p>

{!! Html::linkRoute('crud.edit', 'Edit', array($crud->id), ['class' => 'btn btn-dark']) !!}
{!! Form::open(['route' => ['crud.destroy', $crud->id], 'method' => 'DELETE']) !!}
{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}

<a class="btn btn-dark" href="{{url("/crud")}}">Go back</a>
        </div>

@endsection


