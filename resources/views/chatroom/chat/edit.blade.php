@extends('layouts.app')
@section('content')

<div class="posts">

    {!! Form::model($crud, ['route' => ['crud.update', $crud->id], 'method' => 'PATCH']) !!}

    {{ Form::label('', "" )}}
    {{ Form::textarea('body', null )}}
    <br>

    {{ Form::submit('Save Changes', ['class' => 'btn btn-dark'] )}}

    {!! Form::close() !!}

    <a class="btn btn-dark" href="{{url("/crud")}}">Go back</a>
</div>


@endsection
