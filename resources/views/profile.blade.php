@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; margin-right:25px;">

                <h2>{{ $user->name }}'s Profile</h2>
                <form enctype="multipart/form-data" action="/profile" method="POST">
                    <label>Update Profile Image</label>
                    <input type="file" name="avatar">

                    <input type="hidden" name="_token" value="{{csrf_token()}}">

                    <input type="submit" value="Uploaden">
                </form>
            </div>
        </div>
    </div>
@endsection