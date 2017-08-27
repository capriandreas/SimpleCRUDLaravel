<!DOCTYPE html>
<html>
<head>
	<title>@yield('judul')</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<a href="{{url('/todo/create')}}" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i>Add New</a>
			@yield('konten')
		</div>
	</div>

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
		
		</div>
	</div>

</body>
</html>