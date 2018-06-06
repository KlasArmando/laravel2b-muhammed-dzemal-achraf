@foreach($comments as $comment)

    <p>{{$comment->body}}<p>

        <a href="{{url("comments/" . $comment->id)}}"><button>View Comment</button></a>

    <hr />
@endforeach