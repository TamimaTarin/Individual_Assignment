<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>	

	<h1>Welcome Home!</h1>&nbsp
	<a href="{{route('home.index')}}">back</a> |
	<a href="/logout">Logout</a> 

	<table border="1">
		<tr>
			<th>id</th>
			<th>name</th>
			<th>operator</th>
			<th>seat_row</th>
			<th>seat_column</th>
			<th>route</th>
			<th>fare</th>
			<th>departure</th>
			<th>arrival</th>
			<th>Action</th>
		</tr>
		
		@foreach($buses as $bus)
		<tr>
			<td>{{$bus['id']}}</td>
			<td>{{$bus['name']}}</td>
			<td>{{$bus['operator']}}</td>
			<td>{{$bus['seat_row']}}</td>
			<td>{{$bus['seat_column']}}</td>
			<td>{{$bus['route']}}</td>
			<td>{{$bus['fare']}}</td>
			<td>{{$bus['departure']}}</td>
			<td>{{$bus['arrival']}}</td>
			<td>
				<a href="{{route('home.edit', $bus['id'])}}">Edit</a> | 
				<a href="{{route('home.delete', $bus['id'])}}">Delete</a> |
				
			</td>
		</tr>
		@endforeach
	</table>

</body>
</html>