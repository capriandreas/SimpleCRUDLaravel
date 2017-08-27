<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Todolist extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_todolist', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 50);
            $table->string('priority', 20);
            $table->string('complete', 10);
            $table->dateTime('duedate');
            $table->string('notes', 200)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tb_todolist');
    }
}
