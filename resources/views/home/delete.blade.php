<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>	

	<h1>bus Details</h1>&nbsp
	<a href="/logout">Logout</a> <br>

		<table>
			<tr>
				<td>id</td>
				<td>{{$id}}</td>
			</tr>
			<tr>
				<td>name</td>
				<td>{{$name}}</td>
			</tr>
			<tr>
				<td>operaor</td>
				<td>{{$operator}}</td>
			</tr>
			<tr>
				<td>seat_row</td>
				<td>{{$seat_row}}</td>
			</tr>
			<tr>
				<td>seat_column</td>
				<td>{{$seat_column}}</td>
			</tr>
			<tr>
				<td>route</td>
				<td>{{$route}}</td>
			</tr>
			<tr>
				<td>fare</td>
				<td>{{$fare}}</td>
			</tr>
			<tr>
				<td>departue</td>
				<td>{{$departure}}</td>
			</tr>
			<tr>
				<td>arrival</td>
				<td>{{$arrival}}</td>
			</tr>
		</table>
		<h2>Are you sure? This can't be undone!</h2>
		<form method="post">
			{{csrf_field()}}
			<input type="hidden" name="id" value="{{$id}}">
			<input type="submit" name="submit" value="Confirm">
		</form>
</body>
</html>