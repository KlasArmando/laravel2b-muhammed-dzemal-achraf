@extends('layouts.app')

@section('content')
    <section class="page_title">
        <h1 class="title">{{$title}}</h1>
    </section>
    <!--  end page title  -->


    <!--  start work details section  -->
    <section class="work_details clearfix">
        <div class="wrapper">
            <p class="intro">Integer pharetra tellus varius dictum erat vel, maximus tellus Sed vitae auctor ipsum. Aliquam luctus erat nec pulvinar vehicula. Donec congue tortor eget sem condimentum, ut tempor massa porttitor. Praesent tincidunt mi orci, in sollicitudin mi dapibus dapibus.</p>
            <div class="columns">
                <img src="img/work1.jpg" alt="" title="" class="col_left"/>
                <img src="img/work2.jpg" alt="" title="" class="col_right"/>
            </div>
            <div class="columns">
                <img src="img/work3.jpg" alt="" title=""/>
            </div>
        </div>
    </section>
    <!--  end work details section  -->

@endsection