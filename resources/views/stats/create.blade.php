@extends('layouts.app')

@section('content')

    <h2>Create Stats</h2><br  />
    <form method="post" action="{{url('stats')}}">
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="nation">Nation:</label>
                <input type="text" class="form-control" name="nation">
            </div>
        </div>

        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <button type="submit" class="btn btn-success" style="margin-left:38px">Add Stat</button>
            </div>
        </div>
    </form>

@endsection