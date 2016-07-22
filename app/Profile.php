<?php

namespace taskapp;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
	public function user()
	{
		return $this->belongsTo('taskapp\User');
	}

    /**
     * Asignación masiva por model::create(Array);
     */
    protected $fillable = [
    	'telephone','url',
    ];
}
