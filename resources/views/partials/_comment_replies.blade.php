@foreach($comments as $comment)
<div class="sided-70 mb-40" style="padding-left: 50px">
    <div class="s-left rounded">
        <img src="/avatars/{{$comment->user->avatar}}" alt="">
    </div><!-- s-left -->
    <div class="s-right ml-100 ml-xs-85">
        <h5><b>{{$comment->user->name}}</b> <span class="font-8 color-ash">{{$comment->created_at}}</span></h5>
        <p class="mtb-15">{{$comment->body}}</p>
    </div><!-- s-right -->
    <a href="" id="reply"></a>
    <form method="post" action="{{ route('reply.add') }}">
        @csrf
        <div class="form-group">
            <input type="text" name="comment_body" class="form-control" />
            <input type="hidden" name="story_id" value="{{ $story_id }}" />
            <input type="hidden" name="comment_id" value="{{ $comment->id }}" />
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-warning" value="Reply" />
        </div>
    </form>
    @include('partials._comment_replies', ['comments' => $comment->replies])
</div>
@endforeach