<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = 'author';
    protected $primaryKey = 'author_id';
    public $timestamps = false;

    public function article(){
    	return $this->hasMany('App\Article','author_id');
    }
    
    public function users(){
    	return $this->hasMany('App\Users','author_id');
    }
    public function comments(){
    	return $this->hasMany('App\Comments','author_id');
    }

}
