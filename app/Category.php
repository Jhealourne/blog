<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    protected $primaryKey = 'category_id';
    public $timestamps = false;

    public function article(){
    	return $this->hasMany('App\Article','category_id')->where('deleted',0)->orderby('publish_datetime','DESC')->take(4);
    }
}
