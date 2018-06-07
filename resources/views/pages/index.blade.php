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
    <!--  end services section  -->



    <!--  start projects section  -->
    <section class="work clearfix">
        <div class="wrapper">
            <h2 class="title">Trending News</h2>

            <article class="project1">
                <div class="media">
                    ><img src="img/worldcup.jpg" alt="" title="">
                </div>
                <div class="details">
                        <h1>World Cup in June</h1>
                    </a>
                    <p>World Cup is getting closer and closer, read here everything about every country that participates.</p>
                    <a href="{{ URL::to('/posts/2') }}">Read More</a>
                </div>
            </article>
            <article class="project2">
                <div class="media">
                    <img src="img/esports.jpg" alt="" title="">
                </div>
                <div class="details">
                        <h1>Dennis leaves Fnatic</h1>
                    </a>
                    <p>After Olofmeister, Dennis Edman has also left Fnatic. Dennis said that he is looking forward to a new chapter.</p>
                    <a href="{{ URL::to('/posts/3') }}">Read More</a>
                </div>
            </article>
        </div>
    </section>

    <section>

    </section>


@endsection
