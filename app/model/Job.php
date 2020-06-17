<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\model\Company_Cat;
use App\model\Applications;
use App\model\DownloadRec;
use App\model\JobsTemp;

class Job extends Model
{
    protected $table = 'tbl_jobs';
    protected $guarded = [];
    public $timestamps = false;

    public  function  User(){
        return $this->belongsTo('App\User', 'user_id' );
    }

    public function Category(){
        return $this->belongsTo('App\model\Company_Cat', 'cat_id');
    }

    public function Applications(){
        return $this->hasMany('App\model\Applications', 'job_id');
    }

    public function DownloadRec(){
        return $this->hasMany('App\model\DownloadRec', 'job_id');
    }

    public function JobsTemp(){
        return $this->hasMany('App\model\JobsTemp', 'job_id');
    }
}
