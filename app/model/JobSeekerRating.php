<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\model\EmployerProfile;

class JobSeekerRating extends Model
{
    public $timestamps = false;
    protected $guarded = [];
    protected $table = 'tbl_jobseeker_rating';

    public function User(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function Employer(){
        return $this->belongsTo('App\model\EmployerProfile', 'employer_id');
    }
}
