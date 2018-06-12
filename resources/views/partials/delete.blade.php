
{!! Form::open(['route' => ['comments.destroy', $crud->id], 'method' => 'DELETE']) !!}
{!! Form::submit('Delete') !!}
{!! Form::close !!}