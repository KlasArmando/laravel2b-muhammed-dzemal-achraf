@extends('layouts.app')
    @section('content')
        <div class="posts">
            <p class="lead">{{ $crud4->body }}</p>

            {!! Html::linkRoute('crud4.edit', 'Edit', array($crud4->id), ['class' => 'btn btn-dark']) !!}
            {!! Form::open(['route' => ['crud4.destroy', $crud4->id], 'method' => 'DELETE']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}

            <a class="btn btn-dark" href="{{url("/crud4")}}">Go back</a>
        </div>

@endsection


