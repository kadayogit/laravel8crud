<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/all.css')}}">
</head>
<body>
 <div class="container">
	<h2 class="text-success text-center">Employee Records</h2>
	<p class="text-right">
	  <a href="/add" class="btn btn-success btn-md" style="margin: 5px;">Add New Employee</a>
    </p>
	@if(Session::has('deleted'))
	<span style="color: red; font-size: 18px;">
		{{Session::get('deleted')}}
	</span>

	@endif

	<table class="table table-striped table-hover table-sm">
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
        	<td><a href="edit/{{$item['id']}}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a> |
        		<a href="delete/{{$item['id']}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
        	</td>
        </tr>
		@endforeach
	</table>
</div>




	<script src="{{asset('js/bootstrap.js')}}"></script>
	<script src="{{asset('js/all.js')}}"></script>

</body>
</html>