<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['name', 'email', 'message',
	
	];

     public function post(){
    	return $this->belongsTo('App\Post');
    }
}
