@extends('layout')
@section('content')
 <h1 class="title"> {{$serie->title}} </h1>
 <div class="box">
 	<h2>{{$serie->description}}</h2>
  @can('update',$serie)
  <p>
 	<a href="/series/{{$serie->id}}/edit">Edit Serie</a>
 </p>
 
 </div>
 
 
 <form method="POST" action="/series/{{$serie->id}}/stories" class="box">
 	@csrf
 	<div class="field">
 	 <label class="label" for="story">New Story</label>
 	 <div class="control">
 	 	<input type="text" class="input" name="title" placeholder="Story Title" required>
 	 </div>
 	 <div class="control">
 	 	<textarea class="textarea" name="story" placeholder="Story..." required></textarea>
 	 </div>
 	</div>
 	<div class="field">
 		<div class="control">
 			<button type="submit" class="button is-link">Add Story</button>
 		</div>
 	</div>
 </form>
 @endcan
 @if($serie->stories->count())
 <div>
 	@foreach($serie->stories as $story)
 	 <a href="/stories/{{$story->id}}"><li>{{$story->title}}</li></a>
 	@endforeach
 </div>
 @endif
@endsection
