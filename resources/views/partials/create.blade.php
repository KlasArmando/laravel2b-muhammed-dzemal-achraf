{!! Form::open(['route' => 'crud.store']) !!}

{{Form::label('body', 'Crud')}}
{{Form::text('body', null)}}

{{Form::submit('Submit comment')}}

{!! Form::close() !!}

<a href="crud"><button>View all comments</button></a>



