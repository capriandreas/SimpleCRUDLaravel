<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todolist extends Model
{
    protected $table = 'tb_todolist';
    protected $fillable = ['title', 'priority', 'complete', 'duedate', 'notes'];
}
