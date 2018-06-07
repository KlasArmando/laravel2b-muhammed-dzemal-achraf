@extends('layouts.app')

@section('content')
    <section class="page_title">
        <h1 class="title">Posts</h1>
    </section>
    <section class="work_details clearfix">
        <div class="wrapper">
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <h3><a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a>﻿</h3>
                        <small>Written on {{$post->created_at}}</small>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No posts found</p>
    @endif
        </div>
    </section>
@endsection