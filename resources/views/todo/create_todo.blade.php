@extends('layout')

@section('judul')
Create To Do List 
@endsection

@section('konten')
<form action="{{url('todo')}}" method="post"> 
	{{csrf_field()}}
	<label>Title</label>
	<input text="text" name="title" class="form-control">
	<label>Priority</label>
	<input text="text" name="priority" class="form-control">
	<label>Complete</label>
	<input text="text" name="complete" class="form-control">
	<label>Due Date</label>
	<input text="text" name="duedate" class="form-control">
	<label>Notes</label>
	<input text="text" name="notes" class="form-control">
	<input type="submit" class="btn btn-success" value="Create">
</form>
@endsection