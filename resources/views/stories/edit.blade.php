@extends('layout')

@section('content')
 <h1 class="title">Edit Story</h1>
  <form method="POST" action="/stories/{{$story->id}}" style="margin-bottom: lem">
   {{method_field('PATCH')}}
   {{csrf_field()}}
    <div class="field">
	 <label class="label" for="title">Title</label>
	 <div class="control">
	  <input type="text" class="input" name="title" placeholder="Title" value="{{$story->title}}"> 
	 </div>
	</div>
	<div class="field">
	 <label class="label" for="story">Story</label>
	 <div class="control">
	  <textarea name="story" class="textarea">{{$story->story}}</textarea>
	 </div>
	</div>
	<div class="field">
	 <div class="control">
	  <button type="submit" class="button is-link">Update Story</button>
	</div>
	
  </form>

  
  
  <form method="POST" action="/stories/{{$story->id}}">
    @method('DELETE')
	@csrf
    <div class="field">
	 <div class="control">
	  <button type="submit" class="button">Delete Story</button>
	 </div>
	</div>
  </form>




@endsection