@extends('layouts.app')

@section('content')


    <div class="news"></div>

    <div class="content-2">

        <span class="four">SPORTZONE</span>
        <span class="five">VAN VOETBAL TOT E-SPORTS</span>
        <span class="six">OP EEN PLATFORM</span>

    </div>

    <section class="news_details clearfix">
        <div class="wrapper">

            <div class="flex-container">
                <div>	<iframe frameborder="0"  scrolling="no" width="300" height="575" src="https://www.fctables.com/england/premier-league/iframe/?type=table&lang_id=24&country=155&template=10&team=189570&timezone=Europe/Amsterdam&time=24&po=1&ma=1&wi=1&dr=1&los=1&gf=1&ga=1&gd=0&pts=0&ng=1&form=0&width=300&height=400&font=Tahoma&fs=12&lh=22&bg=FFFFFF&fc=333333&logo=1&tlink=0&ths=0&thb=1&thba=FFFFFF&thc=000000&bc=dddddd&hob=f5f5f5&hobc=ebe7e7&lc=333333&sh=1&hfb=1&hbc=3bafda&hfc=FFFFFF"></iframe><div style="text-align:center;"></div>
                </div>
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
                    @else
                        <p>No posts found</p>
                </div>
                @endif
            </div>
        </div>
    </section>

    <section class="secondtitle">
        Kampioenen
    </section>

    <section class="thumbnail-grid flex">
        <a href="posts/19" class="flex-item">
            <figure class="i1">
                <figcaption>NBA Kampioen</figcaption>
            </figure>
        </a>
        <a href="posts/20" class="flex-item">
            <figure class="i2">
                <figcaption>CS:GO Major Kampioen</figcaption>
            </figure>
        </a>
        <a href="posts/21" class="flex-item">
            <figure class="i3">
                <figcaption>Champions League Kampioen</figcaption>
            </figure>
        </a>
    </section>

@endsection
