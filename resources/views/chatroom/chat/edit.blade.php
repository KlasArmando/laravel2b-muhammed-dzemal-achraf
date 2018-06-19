@extends('layouts.app')
@section('content')

{!! Form::model($crud, ['route' => ['crud.update', $crud->id], 'method' => 'PATCH']) !!}

{{ Form::label('body', "Body:" )}}
{{ Form::textarea('body', null )}}

{{ Form::submit('Save Changes' )}}

{!! Form::close() !!}

    @endsection
