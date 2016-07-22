<?php

namespace taskapp;

use Illuminate\Database\Eloquent\Model;

class Lista extends Model
{
    //
    public function tareas()
    {
    	return $this->hasMany('taskapp\Tarea');
    }
}
