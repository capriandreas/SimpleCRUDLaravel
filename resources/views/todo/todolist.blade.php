@extends('layout')

@section('judul')
To Do List 
@endsection

@section('konten')

<table class="table table-hover">
<thead>
<tr>
	<th>Title</th>
	<th>Priority</th>
	<th>Complete</th>
	<th>Due Date</th>
	<th>Notes</th>
</tr>
</thead>
<tbody>

	@foreach($data as $a)
		<tr>
			<td>{{$a->title}}</td>
			<td>{{$a->priority}}</td>
			<td>{{$a->complete}}</td>
			<td>{{$a->duedate}}</td>
			<td>{{$a->notes}}</td>
		</tr>
	@endforeach

</tbody>
</table>