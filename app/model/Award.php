<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;


class Award extends Model
{
    protected $guarded = [];
    protected $table = 'tbl_award';
    public $timestamps = false;

    public function  User(){
         return $this->belongsTo('App\User', 'user_id');
    }


}
