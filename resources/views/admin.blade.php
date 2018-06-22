@extends('layouts.app')

@section('content')

    <!--  stat page title  -->
    <section class="page_title">
        <h1 class="title">Admin Dashboard</h1>
        <div>
            @component('components.who')
                @endcomponent
        </div>
        <a href="{{route('posts.create')}}" class="btn btn-outline-dark">Create Post</a>
    </section>
    <!--  end page title  -->

    <!--  start contact info section  -->
    <section>
        <h1>POSTS</h1>
        <div class="wrapper">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
        </div>
        <div>
        @if(count($posts) > 0)
         <table class="table table-striped">
            <thead>
             <tr>
                <th>Title</th>
                <th></th>
                <th></th>
                 <th colspan="2">Action</th>
            </tr>
            </thead>
             <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->title}}</td>
                    <td></td>
                    <td></td>
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
             </tbody>
        </table>
        </div>
    </section>

@endsection
