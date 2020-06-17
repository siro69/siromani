<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;


class EmployerProfile extends Model
{
    protected $table = 'tbl_employer_profile';
    protected $guarded = [];

    public $timestamps = false;

    public function User(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function Applications(){
        return $this->hasMany('App\model\Applications', 'emp_id');
    }

    public function FollowEmployer(){
        return $this->hasMany('App\model\FollowEmployer', 'emp_id');
    }

    public function JobSeekerRating(){
        return $this->hasMany('App\model\JobSeekerRating', 'emp_id');
    }
}
