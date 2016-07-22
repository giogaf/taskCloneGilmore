<?php

namespace taskapp;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    /**
     * Asignación masiva por model::create(Array);
     */
    protected $fillable = [
    	'telephone','url',
    ];
}
