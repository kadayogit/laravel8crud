<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h2>Employee Information</h2>

	@if(Session::has('deleted'))
	<span style="color: red; font-size: 18px; margin: 20px;">
		{{Session::get('deleted')}}
	</span>

	@endif

	<table border="1" width="800" style="border-collapse: collapse;">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Phone</th>
			<th>Address</th>
			<th>Sallary</th>
			<th>Action</th>
		</tr>

		@foreach ($listemployee as $item)
        <tr>
        	<td>{{$item->id}}</td>
        	<td>{{$item->name}}</td>
        	<td>{{$item->phone}}</td>
        	<td>{{$item->address}}</td>
        	<td>$ {{$item->sallary}}</td>
        	<td><a href="edit/{{$item['id']}}">Edit</a> |
        		<a href="delete/{{$item['id']}}">Delete</a>
        	</td>
        </tr>
		@endforeach
	</table>

	<a href="/add">Add New Employee</a>

</body>
</html>