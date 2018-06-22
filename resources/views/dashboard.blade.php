@extends('layouts.app')

@section('content')

    <!--  stat page title  -->
    <section class="page_title">
        <h1 class="title">USER Dashboard</h1>

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
                <div class="container">
                    <div>
                        @component('components.who')
                        @endcomponent
                    </div>
                </div>
        </div>
    </section>
@endsection
