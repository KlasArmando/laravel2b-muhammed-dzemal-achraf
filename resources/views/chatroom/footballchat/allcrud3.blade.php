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
            @foreach($cruds3 as $crud3)
                <tr>

                    <td><div id="viewCommentsName">
                            {{$crud3->name}}
                        </div></td>

                    <td>
                        <div id="viewCommentsComment">
                            {{$crud3->body}}
                        </div></td>

                    <td>
                        <a class="btn btn-dark" href="{{url("crud3/" . $crud3->id)}}">View Comment</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    @endsection