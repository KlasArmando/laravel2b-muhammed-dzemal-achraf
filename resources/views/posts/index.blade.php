@extends('layouts.app')

@section('content')

    <section class="news">
        <h2 class="caption">Warriors 3-0 up vs the Cavs.</h2>
    </section>

    <section class="informatie">
        <ul>
            <li>
                <h1>Golden State Warriors 3-0 Cleveland Cavaliers</h1>
                <p>The team from the west with 4 all-stars is to strong for LeBron James.</p>
                <a href="{{ URL::to('/posts/1') }}">Read More</a>
            </li>
        </ul>
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