<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;


class Reference extends Model
{
    public $timestamps = false;
    protected $guarded = [];
    protected $table = 'tbl_references';

    public function User(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
