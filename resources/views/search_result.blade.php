<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <div class="container">
    @if(isset($details))
        <p> The Search results for your query <b> {{ $query }} </b> are :</p>
    <h2>Sample Story details</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Title</th>
                <th>Link</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $stories)
            <tr>
                <td>{{$stories->title}}</td>
                <td><a href="/stories/{{$stories->id}}">Go to story</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
</body>
</html>