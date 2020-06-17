<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\model\PersonalInfo;

class SeekerStatus extends Model
{
    public $timestamps = false;
    protected $guarded = [];
    protected $table = 'tbl_service_requests';

    public function User(){
        return $this->belongsTo('App\model\User', 'user_id');
    }

    public function JobSeeker(){
        return $this->belongsTo('App\PersonalInfo', 'seeker_id');
    }
}
