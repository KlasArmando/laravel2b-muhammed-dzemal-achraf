@extends('layouts.app')

@section('content')
    <table class="table table-striped">
        <tbody>
                <h1>Resultaten</h1>
                @if(count($stat)>0)
                    @foreach($stat as $stats)
                        <tr>
                        <th>{{ $stats->id }}</th>
                        <th>{{ $stats->name }}</th>
                        <th>{{$stats->nation }}</th>
                        </tr>
                    @endforeach
                @endif
        </tbody>
    </table>

@endsection