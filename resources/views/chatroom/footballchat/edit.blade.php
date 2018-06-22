@extends('layouts.app')
@section('content')

    <div class="posts">

        {!! Form::model($crud3, ['route' => ['crud3.update', $crud3->id], 'method' => 'PATCH']) !!}

        {{ Form::label('', "" )}}
        {{ Form::textarea('body', null )}}
        <br>

        {{ Form::submit('Save Changes', ['class' => 'btn btn-dark'] )}}

        {!! Form::close() !!}

        <a class="btn btn-dark" href="{{url("/crud3")}}">Go back</a>
    </div>


@endsection
