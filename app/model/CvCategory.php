<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;


class CvCategory extends Model
{
    protected $table = 'tbl_cv_category';
    protected $guarded = [];

    public $timestamps = false;

    public function User(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
