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
	<th>Detail</th>
	<th>Edit</th>
	<th>Delete</th>
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

			<td><a href="{{ url('todo/'.$a->id) }}" class="btn btn-primary"><i class="glyphicon glyphicon-eye-open"></i></td>
			<td><a href="{{ url('todo/'.$a->id.'/edit') }}" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i></td>
			<td>
			<form action="{{ url('todo/'.$a->id) }}" method="post">
				{{csrf_field()}}
				<input type="hidden" name="_method" value="DELETE">
					<button type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i>
					</button>
			</form>
		</tr>
	@endforeach

</tbody>
</table>