
{!! Form::open(['route' => ['comments.destroy', $comment->id], 'method' => 'DELETE']) !!}
{!! Form::submit('Delete') !!}
{!! Form::close !!}