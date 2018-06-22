@extends('layouts.app')

@section('content')

    <div class="container">
        <form role="search" method="GET" action="{{url("searchcontent")}}">
            <div class="input-group">
                <input type="text" class="" placeholder="Zoeken by name" name="name">
                <div class="input-group-btn">
                    <button type="submit">ZOEK!<i class=""></i></button>
                </div>
            </div>
        </form>

        <br />
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div><br />
        @endif
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Nation</th>
                <th colspan="2">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($stats as $stat)
                <tr>
                    <td>{{$stat['id']}}</td>
                    <td>{{$stat['name']}}</td>
                    <td>{{$stat['nation']}}</td>
                    <td><a href="{{action('StatController@edit', $stat['id'])}}" class="btn btn-dark">Edit</a></td>
                    <td>
                        <form action="{{action('StatController@destroy', $stat['id'])}}" method="post">
                            {{csrf_field()}}
                            <input name="_method" type="hidden" value="DELETE">
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            {{$stats->links()}}
            </tbody>
        </table>
    </div>

@endsection