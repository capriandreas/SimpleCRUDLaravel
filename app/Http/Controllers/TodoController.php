<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Todolist;

class TodoController extends Controller
{
    public function index(){
    	$data = Todolist::all();
    	return view('todo.todolist')->with('data', $data);
    }

    public function create(){
    	return view('todo.create_todo');
    }

    public function store(Request $request){
    	Todolist::create($request->all());

    	return redirect('todo');
    }

    public function show($id){
        $data = Todolist::find($id);
        return view('todo.detail_todo')->with('data', $data);
    }

    public function edit($id){
        $data = Todolist::find($id);
        return view('todo.edit_todo')->with('data', $data);
    }

    public function update(Request $request, $id){

        Todolist::find($id)->update($request->all());
        return redirect('todo');
    }
}
