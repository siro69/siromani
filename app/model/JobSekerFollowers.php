<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\model\PersonalInfo;


class JobSekerFollowers extends Model
{
    public $timestamps = false;
    protected $guarded = [];
    protected $table = 'tbl_jobseeker_followers';

    public function JobSeeker(){
        return $this->belongsTo('App\model\PersonalInfo', 'seeker_id');
    }

    public function User(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
