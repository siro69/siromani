<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\model\Job;

class TempJob extends Model
{
    public $timestamps = false;
    protected $guarded = [];
    protected $table = 'tbl_temp_job';

    public function User(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function Job(){
        return $this->belongsTo('App\model\Job', 'job_id');
    }
}
