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

                <h1>Posts</h1>
                @if(count($posts) > 0)
                    @foreach($posts as $post)
                        <div class="well">
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <img style="width:100%" src="storage/cover_images/{{$post->cover_image}}">
                                </div>
                                <div class="col-md-8 col-sm-8">
                                    <h3><a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a>﻿</h3>
                                    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{$posts->links()}}
                @else
                    <p>No posts found</p>
        </div>
    </section>
    @endif
@endsection