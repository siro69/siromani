<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;



class Education extends Model
{
    protected $table = 'tbl_educations';
    protected $guarded = [];

    public $timestamps = false;

    public function User(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
