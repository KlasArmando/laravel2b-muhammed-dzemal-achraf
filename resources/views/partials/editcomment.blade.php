{!! Form::model($comment, ['route' => ['comments.update', $comment->id], 'method' => 'PATCH']) !!}

{{ Form::label('body', "Body:" )}}
{{ Form::textarea('body', null )}}

{{ Form::submit('Save Changes' )}}

{!! Form::close() !!}
