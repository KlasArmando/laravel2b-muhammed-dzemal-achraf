@extends('layouts.app')

@section('content')
    <!--  start contact info section  -->
    <section class="contact_info clearfix">
        <div class="posts">
                <h1>{{$post->title}}</h1>
                <div>
                    {{$post->body}}
                </div>
                <hr>
                <small>Written on {{$post->created_at}}</small>
                <hr>
                <a href="{{ URL::to('/') }}" class="btn">Go Back</a>
                <a href="{{route('posts.show', $post->id)}}/edit" class="btn">Edit</a>

                {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', ]) !!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn'])}}
                {!! Form::close() !!}
        </div>
    </section>
@endsection