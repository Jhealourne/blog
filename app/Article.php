<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'article';
    protected $primaryKey = 'article_id';
    public $timestamps = false;

    public function category(){
    	return $this->belongsTo('App\Category','category_id');
    }
    public function author(){
    	return $this->belongsTo('App\Author','author_id');
    }
    public function comments(){
    	return $this->hasMany('App\Comments','article_id');
    }
}
