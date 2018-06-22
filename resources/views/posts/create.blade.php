@extends('layouts.app')

@section('content')
    <div class="posts">

        <h1 style="font-weight: bold; font-family: 'ITC Avant Garde Gothic LT';" class="title">Create Post!</h1>


        <div id="comment-form">
            {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div>
                <div>
                    {{Form::label('title', 'Title')}}
                    {{Form::text('title', '', ['placeholder' => 'Title of the Post'])}}
                </div>
                <div>
                    {{Form::label('body', 'Body')}}
                    {{Form::textarea('body', '', ['placeholder' => 'Body Text'])}}
                </div>
                <div class="form-group">
                    {{Form::file('cover_image')}}
                </div>
                {{Form::submit('Submit', ['class'=>'btn btn-outline-dark'])}}
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection