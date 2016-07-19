<?php

namespace taskapp;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Tarea extends Model
{
    //
    use SoftDeletes;
    protected $fillable = ['nombre','descripcion'];
}
