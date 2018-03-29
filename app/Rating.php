<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $table = 'rating';
    public $timestamps = false;

    public function article(){
    	return $this->belongsTo('App\Article','article_id');
    }
}
