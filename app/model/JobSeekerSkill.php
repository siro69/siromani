<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;


class JobSeekerSkill extends Model
{
    public $timestamps = false;
    protected $guarded = [];
    protected $table = 'tbl_jobseeker_skill';

    public function User(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
