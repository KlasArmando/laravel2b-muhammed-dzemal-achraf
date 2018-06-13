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
                <a href="{{route('posts.create')}}" class="btn">Create Post</a>
        </div>
    </section>
@endsection
