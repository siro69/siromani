<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;


class Blog extends Model
{
    protected $guarded = [];
    protected $table = 'tbl_blog';
    public $timestamps = false;

    public function Categories(){
       return  $this->belongsTo('App\model\BlogCat', 'cat_id');
    }
}
