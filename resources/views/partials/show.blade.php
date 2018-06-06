<p class="lead">{{ $comment->body }}</p>

{!! Html::linkRoute('comments.edit', 'Edit', array($comment->id)) !!}



    {!! Form::open(['route' => ['comments.destroy', $comment->id], 'method' => 'DELETE']) !!}
    {!! Form::submit('Delete') !!}
    {!! Form::close() !!}




