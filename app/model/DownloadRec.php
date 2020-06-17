<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;


class DownloadRec extends Model
{
    protected $table = 'tbl_download_rec';
    protected $guarded = [];

    public $timestamps = false;

    public function JobSeeker(){
        return $this->belongsTo('App\model\PersonalInfo', 'seeker_id');
    }

    public function User(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function Job(){
        return $this->belongsTo('App\model\Job', 'job_id');
    }
}
