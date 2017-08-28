@extends('layout')

@section('judul')
Edit To Do List 
@endsection

@section('konten')
<form action="{{ url('todo/'.$data->id) }}" method="post"> 
	<input type="hidden" name="_method" value="PUT">
	{{csrf_field()}}
	<label>Title</label>
	<input text="text" name="title" value="{{$data->title}}" class="form-control">
	<label>Priority</label>
	<input text="text" name="priority" value="{{$data->priority}}" class="form-control">
	<label>Complete</label>
	<input text="text" name="complete" value="{{$data->complete}}" class="form-control">
	<label>Due Date</label>
	<input text="text" name="duedate" value="{{$data->duedate}}" class="form-control">
	<label>Notes</label>
	<input text="text" name="notes" value="{{$data->notes}}" class="form-control">

	<input type="submit" class="btn btn-success" value="Simpan">
</form>
@endsection