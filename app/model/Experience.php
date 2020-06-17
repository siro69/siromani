<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;


class Experience extends Model
{
    protected $table = 'tbl_experiences';
    protected $guarded = [];

    public $timestamps = false;

    public function User(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
