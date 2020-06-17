<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;


class BlogCat extends Model
{
    protected $table = 'tbl_blog_categories';
    protected $guarded = [];

    public $timestamps = false;

    public function Blog(){
        return $this->hasMany('App\model\Blog', 'job_id');
    }
}
