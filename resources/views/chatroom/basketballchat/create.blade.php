@extends('layouts.app')
@section('content')
    <div class="posts">

        <h1 style="font-weight: bold; font-family: 'ITC Avant Garde Gothic LT';" class="title">CHATTEN!</h1>


        <div id="comment-form">
            {!! Form::open(['route' => 'crud4.store']) !!}

            {{Form::label('')}}
            {{Form::text('name', null, ['placeholder' => 'Name', 'class' => 'btn btn-outline-white'])}}
            <br>

            {{Form::label('')}}
            {{Form::text('email', null, ['placeholder' => 'E-mail', 'class' => 'btn btn-outline-white'])}}
            <br>

            {{Form::label('')}}
            {{Form::textarea('body', null, ['placeholder' => 'Text', 'class' => 'btn btn-outline-white'])}}
            <br>

            {{Form::submit('Submit Text', ['class' => 'btn btn-dark'])}}

            {{Form::close() }}
            <br>

            <a href="crud4"><button class="btn-dark">View all comments</button></a>

        </div>
    </div>

@endsection