@extends('layout')

@section('content')
 <h1 class="title">Edit Serie</h1>
  <form method="POST" action="/series/{{$serie->id}}" style="margin-bottom: lem">
   {{method_field('PATCH')}}
   {{csrf_field()}}
    <div class="field">
	 <label class="label" for="title">Title</label>
	 <div class="control">
	  <input type="text" class="input" name="title" placeholder="Title" value="{{$serie->title}}"> 
	 </div>
	</div>
	<div class="field">
	 <label class="label" for="description">Description</label>
	 <div class="control">
	  <textarea name="description" class="textarea">{{$serie->description}}</textarea>
	 </div>
	</div>
	<div class="field">
	 <div class="control">
	  <button type="submit" class="button is-link">Update Serie</button>
	</div>
	
  </form>

  
  
  <form method="POST" action="/series/{{$serie->id}}">
    @method('DELETE')
	@csrf
    <div class="field">
	 <div class="control">
	  <button type="submit" class="button">Delete Serie</button>
	 </div>
	</div>
  </form>




@endsection