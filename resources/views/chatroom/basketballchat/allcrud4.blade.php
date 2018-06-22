@extends('layouts.app')
@section('content')

    <div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Name</th>
                <th>Chat</th>
                <th colspan="2">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cruds4 as $crud4)
                <tr>

                    <td><div id="viewCommentsName">
                            {{$crud4->name}}
                        </div></td>

                    <td>
                        <div id="viewCommentsComment">
                            {{$crud4->body}}
                        </div></td>

                    <td>
                        <a class="btn btn-dark" href="{{url("crud4/" . $crud4->id)}}">View Comment</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    @endsection