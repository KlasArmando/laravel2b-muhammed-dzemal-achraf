@extends('layouts.app')

@section('content')
    <!--  start contact info section  -->

    <section class="page_title">
                <h1 class="title">{{$post->title}}</h1>
        </div>
    </section>
    <section class="show">
    <div>
           <img class="coverimage" src="../storage/cover_images/{{$post->cover_image}}">
                <br>
                <br>
                <div class="showbody">
                    {{$post->body}}
                </div>
                <hr>
                <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                <hr>
                @if(!Auth::guest())
                    @if(Auth::user()->id == $post->user_id)
                        <a href="{{ URL::to('/') }}" class="btn btn-default">Go Back</a>
                        <a href="{{route('posts.show', $post->id)}}/edit" class="btn btn-default">Edit</a>
                        {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', ]) !!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                        {!! Form::close() !!}
                    @endif
                @endif

            <h2>Comment</h2>
            <div id="comment-form">
                {{Form::open(['route' => ['comments.store', $post->id], 'method' => 'POST']) }}

                {{Form::label('')}}
                {{Form::text('name', null, ['placeholder' => 'Name', 'class' => 'btn btn-outline-white'])}}
                <br>
                <br>

                {{Form::label('')}}
                {{Form::text('email', null, ['placeholder' => 'E-mail', 'class' => 'btn btn-outline-white'])}}
                <br>
                <br>
                {{Form::label('')}}
                {{Form::textarea('comment', null, ['placeholder' => 'Text', 'class' => 'btn btn-outline-white'])}}
                <br>
                <br>

                {{Form::submit('Add Comment', ['class' => 'btn btn-outline-dark'])}}

                {{Form::close() }}
            </div>
        </div>
        <br>

    <div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Nickname</th>
            <th>Comment</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($post->comments as $comment)
            <tr>

            <td><div id="viewCommentsName">
                {{$comment->name}}
            </div></td>

            <td>
            <div id="viewCommentsComment">
                {{$comment->comment}}
            </div></td>

            <td>
                <a class="btn btn-dark" href="{{ route('comments.edit', $comment->id) }}">Edit</a>
                <a class="btn btn-danger" href="{{ route('comments.delete', $comment->id) }}">Delete</a>
            </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
    </section>


@endsection