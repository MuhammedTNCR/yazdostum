<!DOCTYPE html>
<html>
<head>
 <title></title>
</head>
<body>

 <h1>A New Serie</h1>
  <form method="POST" action="/series">
    {{ csrf_field() }}
     <div>
	     <input type="text" name="title" class="input {{$errors->has('title')?'is-danger':''}}" placeholder="Serie title" value="{{old('title')}}"   >
	 </div>
	 <div>
	     <textarea name="description"  placeholder="Description"  >{{old('description')}}</textarea>
	 </div>
	 <div>
	     <button type="submit">Build the Serie</button>
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