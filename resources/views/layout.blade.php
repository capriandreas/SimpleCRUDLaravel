<!DOCTYPE html>
<html>
<head>
	<title>@yield('judul')</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
</head>
<body>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<a href="{{url('/todo/create')}}" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Add New</a>
			<a href="{{url('/todo')}}" class="btn btn-primary"><i class="glyphicon glyphicon-th-list"></i> Todo List</a>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			@yield('konten')
		</div>
	</div>

</body>
</html>