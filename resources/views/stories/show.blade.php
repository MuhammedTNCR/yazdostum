@extends('layout')
@section('content')
 <h1 class="title"> {{$story->title}} </h1>
 <div class="box">
  @if(file_exists('images/'.$story->image))
  <img src="/images/{{$story->image}}" style="width: 200px; height: 200px;">
  @endif
 	<h2>{{$story->story}}</h2>
 	<p>{{$story->id}}</p>
  @can('update',$story)	
  <p>
 	<a href="/stories/{{$story->id}}/edit">Edit</a>
 </p>
 @endcan
 </div>
@endsection
