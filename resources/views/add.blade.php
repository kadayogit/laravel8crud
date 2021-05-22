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
	<!-- viladation code --->
    @if ($errors->any())
	   
    @endif    

<div class="container">
	<h1 class="text-success text-center">Add New Employee</h1>
	           
	           <!--added success message -->
			    @if(Session::has('add-message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">{{Session::get('add-message')}}
                   <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">&times;</button>
                 </div>
	            @endif

	            <span class="text-danger">
				 @foreach ($errors->all() as $error)
                    <li> {{ $error}} </li>
                 @endforeach
			    </span>

	<form action="add" method="POST">
		@csrf
		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					<input type="text" name="name" class="form-control" placeholder="Enter name">
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<input type="text" name="phone" class="form-control" placeholder="Enter phone">
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<input type="text" name="address" class="form-control" placeholder="Enter address">
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<input type="text" name="sallary" class="form-control" placeholder="Enter sallary">
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<button type="submit" class="btn btn-block btn-primary">Add New</button>
				</div>
			</div>

			<div class="col-md-4">
				<div class="form-group">
					<a href="/" class="btn btn-block btn-success">View Employe record</a>
				</div>
			</div>
		</div>
	</form>
</div>




	<script src="{{asset('js/bootstrap.js')}}"></script>
	<script src="{{asset('js/all.js')}}"></script>

</body>
</html>