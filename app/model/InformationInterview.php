<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\model\PersonalInfo;

class InformationInterview extends Model
{
    public $timestamps = false;
    protected $guarded = [];
    protected $table = 'tbl_information_interview';

    public function User(){
        return $this->belongsTo(' App\User', 'user_id');
    }

    public function JobSeeker(){
        return $this->belongsTo(' App\model\PersonalInfo', 'seeker_id');
    }
}
