<!DOCTYPE html>
<html>
<head>
 <title></title>
</head>
<body>

 <h1>Write a New Story</h1>
  <form method="POST" action="/stories" enctype="multipart/form-data">
    {{ csrf_field() }}
     Upload image:
     <div class="col-md-6">

        <input type="file" name="image" class="form-control">

     </div>
     <div>
	     <input type="text" name="title" class="input {{$errors->has('title')?'is-danger':''}}" placeholder="Story title" value="{{old('title')}}"   >
	 </div>
	 <div>
	     <textarea name="story"  placeholder="Story..."  >{{old('story')}}</textarea>
	 </div>
	 <div>
	     <button type="submit">Publish Story</button>
	 </div>
     @if($errors->any())
	 <div class="notification is-danger">
	 	<ul>
	 		@foreach($errors->all() as $error)
	 		<li>{{$error}}</li>
	 		@endforeach
	 	</ul>
     @endif
	 </div>
  </form>
  
  </ul>
</body>
</html>