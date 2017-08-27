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
}
