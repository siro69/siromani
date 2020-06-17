<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;


class PersonalInfo extends Model
{
    public $timestamps = false;
    protected $guarded = [];
    protected $table = 'tbl_personal_info';

    public function User(){
        return $this->belongsTo('App\User','user_id');
    }
    public function Application(){
        return $this->hasMany('App\model\Applications', 'seeker_id');
    }

    public function DownloadRec(){
        return $this->hasMany('App\model\DownloadRec', 'seeker_id');
    }

    public function FollowEmployer(){
        return $this->hasMany('App\model\FollowEmployer', 'seeker_id');
    }

    public function InformationInterview(){
        return $this->hasMany('App\model\InformationInterview', 'seeker_id');
    }

    public function JobSekerFollowers(){
        return $this->hasMany('App\model\JobSekerFollowers', 'seeker_id');
    }
}
