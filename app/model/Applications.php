<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Applications extends Model
{
    protected $guarded = [];
    protected $table= 'tbl_applications';
    public $timestamps = false;

    public function Employer(){
        return $this->belongsTo('App\model\PersonalInfo', 'emp_id');
    }
    public function  JobSeeker(){
        return $this->belongsTo('App\model\EmployerProfile', 'seeker_id');
    }
    public function Jobs(){
        return $this->belongsTo('App\model\Job', 'job_id');
    }
}
