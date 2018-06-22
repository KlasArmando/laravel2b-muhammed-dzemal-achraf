@extends('layouts.app')

@section('content')
    <section class="page_title">
        <h1 class="title">Nieuws</h1>
    </section>
    <br>

    <div class="wrapper">

    <div>@if(count($posts) > 0)
            @foreach($posts as $post)
                <div class="well">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <img style="width:100%" src="storage/cover_images/{{$post->cover_image}}">
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <h3><a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a>﻿</h3>
                            <small>Written on {{$post->created_at}} by Admin</small>
                        </div>
                    </div>
                </div>
            @endforeach
            {{$posts->links()}}
        @else
            <p>No posts found</p>
    </div>
    @endif
    </div>

@endsection