<!DOCTYPE html>
<html>
<head>
 <title></title>
</head>
<body>

 <h1>My Series</h1>
 <ul>
  @foreach($series as $serie)
   <li>
    <a href="/series/{{$serie->id}}">
   	{{$serie->title}}
   </a>
   </li>
  @endforeach
 </ul>
</body>
</html>