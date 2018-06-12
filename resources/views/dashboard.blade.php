@extends('layouts.app')

@section('content')

    <!--  stat page title  -->
    <section class="page_title">
        <h1 class="title">Dashboard</h1>
    </section>
    <!--  end page title  -->


    <!--  start contact info section  -->
    <section class="contact_info clearfix">
        <div class="wrapper">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
                <a href="{{route('posts.create')}}" class="btn btn-default">Create Post</a>
        </div>

        @if(count($posts) > 0)
        <table class="table table-striped">
            <tr>
                <th>Title</th>
                <th></th>
                <th></th>
            </tr>
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->title}}</td>
                    <td><a href="{{route('posts.show', $post->id)}}/edit" class="btn btn-default">Edit</a></td>
                    <td>
                        {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', ]) !!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            @else
                <p>You have no posts</p>
            @endif
        </table>
    </section>
@endsection
