@extends('layouts.app')
@section('content')
    <div class="posts">
        <p class="lead">{{ $crud3->body }}</p>

        {!! Html::linkRoute('crud3.edit', 'Edit', array($crud3->id), ['class' => 'btn btn-dark']) !!}
        {!! Form::open(['route' => ['crud.destroy', $crud3->id], 'method' => 'DELETE']) !!}
        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}

        <a class="btn btn-dark" href="{{url("/crud3")}}">Go back</a>
    </div>

@endsection


