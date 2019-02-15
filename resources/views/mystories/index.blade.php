<!DOCTYPE html>
<html>
<head>
 <title></title>
</head>
<body>

 <h1>My Stories</h1>
 <ul>
  @foreach($stories as $story)
   <li>
    <a href="/stories/{{$story->id}}">
   	{{$story->title}}
   </a>
   </li>
  @endforeach
 </ul>
</body>
</html>