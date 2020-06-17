<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;


class FollowEmployer extends Model
{
    protected $table = 'tbl_follow_employer';
    protected $guarded = [];

    public $timestamps = false;

    public function JobSeeker(){
        return $this->belongsTo('App\model\PersonalInfo', 'seeker_id');
    }

    public function Employer(){
        return $this->belongsTo('App\model\EmployerProfile', 'employer_id');
    }
}
