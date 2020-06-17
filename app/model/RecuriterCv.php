<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;


class RecuriterCv extends Model
{
    public $timestamps = false;
    protected $guarded = [];
    protected $table = 'tbl_recuriter_cv';


    public function User(){
        return $this->belongsTo('App\User','user_id');
    }
}
