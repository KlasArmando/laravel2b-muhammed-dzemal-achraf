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
            @foreach($cruds as $crud)
                <tr>

                    <td><div id="viewCommentsName">
                            {{$crud->name}}
                        </div></td>

                    <td>
                        <div id="viewCommentsComment">
                           {{$crud->body}}
                        </div></td>

                    <td>
                        <a class="btn btn-dark" href="{{url("crud/" . $crud->id)}}">View Comment</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    @endsection