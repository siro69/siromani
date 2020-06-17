<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;


class AdminType extends Model
{
    public  function User(){
        return $this->belongsToMany('App\User','tbl_admmin_user_type');
    }
}
