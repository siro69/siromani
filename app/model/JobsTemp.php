<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\model\Company_Cat;
use App\User;
use App\model\Job;

class JobsTemp extends Model
{
    public $timestamps = false;
    protected $guarded = [];
    protected $table = 'tbl_jobs_temp';

    public function Category(){
        return $this->belongsTo('App\model\Company_Cat', 'cat_id');
    }

    public function User(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function Job(){
        return $this->belongsTo('App\model\Job', 'job_id');
    }


}
