<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h1>wolcome to add form</h1>

	@if(Session::has('add-message'))
      <span>{{Session::get('add-message')}}</span>
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

	<form action="add" method="POST">
		@csrf
		<input type="text" name="name" placeholder="Enter name">* <br /> <br />
		<input type="text" name="phone" placeholder="Enter phone">* <br /> <br />
		<input type="text" name="address" placeholder="Enter address">* <br /> <br />
		<input type="text" name="sallary" placeholder="Enter sallary">* <br /> <br />

		<button type="submit">Add New</button>
	</form>


	<p><a href="/">View Employe record</a></p>

</body>
</html>