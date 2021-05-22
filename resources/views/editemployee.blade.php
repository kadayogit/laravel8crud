<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h1>Edit Employee Record</h1>

	@if(Session::has('updated'))
      <span>{{Session::get('updated')}}</span>
	@endif

	@if ($errors->any())
        <div>
            <ul style="color: red;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

	<form action="/editemployee" method="POST">
		@csrf

		<input type="hidden" name="id" value="{{$edit['id']}}">
		<input type="text" name="name" value="{{$edit['name']}}" placeholder="Enter name">* <br /> <br />
		<input type="text" name="phone" value="{{$edit['phone']}}" placeholder="Enter phone">* <br /> <br />
		<input type="text" name="address" value="{{$edit['address']}}" placeholder="Enter address">* <br /> <br />
		<input type="text" name="sallary" value="{{$edit['sallary']}}" placeholder="Enter sallary">* <br /> <br />

		<button type="submit">Update</button>

	</form>

	<p><a href="/">View Employe record</a></p>

</body>
</html>