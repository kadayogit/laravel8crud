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
<div class="container" style="width: 600px;">
	<h1 class="text-success text-center">Edit Employee Record</h1>

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
 		<input type="hidden" name="id" class="form-control" value="{{$edit['id']}}">

          <div class="row">
          	<div class="col-md-12">
          		<div class="form-group">
          			<input type="text" name="name" class="form-control" value="{{$edit['name']}}" placeholder="Enter name">
          		</div>
          	</div>
          	<div class="col-md-12">
          		<div class="form-group">
          			<input type="text" name="phone" class="form-control" value="{{$edit['phone']}}" placeholder="Enter phone">
          		</div>
          	</div>
          	<div class="col-md-12">
          		<div class="form-group">
          			<input type="text" name="address" class="form-control" value="{{$edit['address']}}" placeholder="Enter address">
          		</div>
          	</div>
          	<div class="col-md-12">
          		<div class="form-group">
          			<input type="text" name="sallary" class="form-control" value="{{$edit['sallary']}}" placeholder="Enter sallary">
          		</div>
          	</div>
          	<div class="col-md-6">
          		<div class="form-group">
          			<button type="submit" class="btn btn-block btn-danger">Update</button>
          		</div>
          	</div>
          	<div class="col-md-6">
          		<div class="form-group">
          			<a href="/" class="btn btn-block btn-primary">View Employe record</a>
          		</div>
          	</div>
          </div>
	</form>
</div>


	<script src="{{asset('js/bootstrap.js')}}"></script>
	<script src="{{asset('js/all.js')}}"></script>


</body>
</html>