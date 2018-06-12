@foreach($cruds as $crud)

    <p>{{$crud->body}}<p>

        <a href="{{url("crud/" . $crud->id)}}"><button>View Comment</button></a>

    <hr />
@endforeach()