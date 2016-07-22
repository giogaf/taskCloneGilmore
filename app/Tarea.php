<?php

namespace taskapp;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;
class Tarea extends Model
{
    //
	use Sluggable;
    use SoftDeletes;

    protected $fillable = ['nombre','descripcion'];

    public function lista()
    {
        return $this->belongsTo('taskapp\Lista');
    }

    public function sluggable()
    {
    	return [
    	'slug' => [
			'source' => 'nombre',
    	]
    	];
    }
}
