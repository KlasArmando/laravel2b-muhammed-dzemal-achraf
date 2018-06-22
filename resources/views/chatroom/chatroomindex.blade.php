@extends('layouts.app')
@section('content')

    <section class="page_title">
        <h1 class="title">Chat</h1>
    </section>

    <section class="thumbnail-grid flex">
        <a class="flex-item" href="{{ URL::to('generalchat') }}">
            <figure class="i1">
                <figcaption>General Chat</figcaption>
            </figure>
        </a>
        <a class="flex-item" href="{{ URL::to('footballchat') }}">
            <figure class="i2">
                <figcaption>Football Chat</figcaption>
            </figure>
        </a>
        <a class="flex-item" href="{{ URL::to('basketballchat') }}">
            <figure class="i3">
                <figcaption>Basketball Chat</figcaption>
            </figure>
        </a>
    </section>

@endsection