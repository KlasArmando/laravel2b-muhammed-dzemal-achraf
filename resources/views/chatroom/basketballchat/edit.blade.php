@extends('layouts.app')
@section('content')

    <div class="posts">

        {!! Form::model($crud4, ['route' => ['crud4.update', $crud4->id], 'method' => 'PATCH']) !!}

        {{ Form::label('', "" )}}
        {{ Form::textarea('body', null )}}
        <br>

        {{ Form::submit('Save Changes', ['class' => 'btn btn-dark'] )}}

        {!! Form::close() !!}

        <a class="btn btn-dark" href="{{url("/crud4")}}">Go back</a>
    </div>


@endsection
