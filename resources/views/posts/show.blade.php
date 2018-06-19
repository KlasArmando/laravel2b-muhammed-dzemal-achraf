@extends('layouts.app')

@section('content')
    <!--  start contact info section  -->
    <section class="contact_info clearfix">
        <div class="posts">
                <h1>{{$post->title}}</h1>
            <img src="../storage/cover_images/{{$post->cover_image}}">
                <div>
                    {{$post->body}}
                </div>
                <hr>
                <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                <hr>
                @if(!Auth::guest())
                    @if(Auth::user()->id == $post->user_id)
                        <a href="{{ URL::to('/') }}" class="btn">Go Back</a>
                        <a href="{{route('posts.show', $post->id)}}/edit" class="btn">Edit</a>
                        {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', ]) !!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Delete', ['class' => 'btn'])}}
                        {!! Form::close() !!}
                    @endif
            @endif
        </div>

        <div id="comment-form">
                {{Form::open(['route' => ['comments.store', $post->id], 'method' => 'POST']) }}

                    {{Form::label('name', "Name:")}}
                    {{Form::text('name', null)}}

                    {{Form::label('email', 'Email:')}}
                    {{Form::text('email', null)}}

                    {{Form::label('comment', "Comment:")}}
                    {{Form::textarea('comment', null)}}

                    {{Form::submit('Add Comment')}};

                    {{Form::close() }}
        </div>

        <div>
            @foreach($post->comments as $comment)
                <p><strong>Name:</strong> {{$comment->name}} </p>
                <p><strong>Comment:</strong>    <br/>   {{$comment->comment}}</p>

                <p>
                    <a href="{{ route('comments.edit', $comment->id) }}">Edit</a>
                     <a href="{{ route('comments.delete', $comment->id) }}">Delete</a>
                </p>

            @endforeach
        </div>

    </section>
@endsection