{!! Form::open(['route' => 'comments.store']) !!}

{{Form::label('body', 'Comment')}}
{{Form::text('body', null)}}

{{Form::submit('Submit comment')}}

{!! Form::close() !!}

<a href="comments"><button>View all comments</button></a>



