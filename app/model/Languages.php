<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;


class Languages extends Model
{
    public $timestamps = false;
    protected $guarded = [];
    protected $table = 'tbl_languages';

    public function User(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
