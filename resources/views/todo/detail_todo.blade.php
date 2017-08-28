@extends('layout')

@section('judul')
Detail Todo
@endsection

@section('konten')

<table class="table table-hover">
<thead>
	<tr>
		<th>Title</th>
		<th>Priority</th>
	</tr>
</thead>
<tbody>
	<tr>
		<td>{{$data->title}}</td>
		<td>{{$data->priority}}</td>
	</tr>
</tbody>
</table>
@endsection