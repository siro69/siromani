<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public $timestamps = false;
    protected $guarded = [];
    protected $table = 'groups';

    public  function user(){
        return $this->belongsToMany('App\User', 'users_groups');
    }
}
