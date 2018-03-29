<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $table = 'comments'; 
    public $timestamps = false;

    public function article(){
    	return $this->belongsTo('App\Article','article_id');
    }
    public function author(){
    	return $this->belongsTo('App\Author','author_id');
    }
}
