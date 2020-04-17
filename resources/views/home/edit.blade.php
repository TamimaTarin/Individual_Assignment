<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>	

	<h1>Edit bus</h1>&nbsp
	<a href="{{route('home.list')}}">Back</a> |
	<a href="/logout">Logout</a> <br>

	<form method="post">
		{{csrf_field()}}
		<table>
			<tr>
				<td>id</td>
				<td><input type="text" readonly name="id" value="{{$id}}"></td>
			</tr>
			<tr>
				<td>name</td>
				<td><input type="text" name="name" value="{{old('name')}}"></td>
			</tr>
            <tr>
				<td>operator</td>
				<td><input type="text" name="operator" value="{{old('operator')}}"></td>
			</tr>
			<tr>
				<td>seat_row</td>
				<td><input type="text" name="seat_row" value="{{old('seat_row')}}"></td>
			</tr>
			<tr>
				<td>seat_column</td>
				<td><input type="text" name="seat_column" value="{{old('seat_column')}}"></td>
			</tr>
			<tr>
				<td>route</td>
				<td><input type="text" name="route" value="{{old('route')}}"></td>
			</tr>
			<tr>
				<td>fare</td>
				<td><input type="text" name="fare" value="{{old('fare')}}"></td>
			</tr>
			<tr>
				<td>departure</td>
				<td><input type="text" name="departure" value="{{old('departure')}}"></td>
			</tr>
			<tr>
				<td>arrival</td>
				<td><input type="text" name="arrival" value="{{old('arrival')}}"></td>
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Save"></td>
			</tr>
		</table>
	</form>
</body>
</html>