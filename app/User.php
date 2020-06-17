<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;



class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    protected $table = 'users';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];



    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public  function groups(){
        return $this->belongsToMany('App\model\Group', 'users_groups');
    }

    public function jobs(){
        return $this->hasMany('App\model\Job', 'user_id');
    }

    public function AdminType(){
        return $this->hasOne('App\model\AdminType', 'user_id');
    }

    public function Award(){
        return $this->hasMany('App\model\Award', 'user_id');
    }

    public function CvCategory(){
        return $this->hasMany('App\model\CvCategory', 'user_id');
    }

    public function DeviceInfo(){
        return $this->hasMany('App\model\DeviceInfo', 'user_id');
    }

    public function DownloadRec(){
        return $this->hasMany('App\model\DownloadRec', 'user_id');
    }

    public function Education(){
        return $this->hasMany('App\model\Education', 'user_id');
    }

    public function Employer(){
        return $this->hasMany('EmployerProfile', 'user_id');

    }

    public function EmployerWeekly(){
        return $this->hasMany('App\model\EmployerWeekly', 'user_id');
    }

    public function Experience(){
        return $this->hasMany('App\model\Experience', 'user_id');

    }

    public function InformationInterview(){
        return $this->hasMany('App\model\InformationInterview', 'user_id');

    }

    public function JobSeekerRating(){
        return $this->hasMany('App\model\JobSeekerRating', 'user_id');

    }

    public function JobSeekerSkill(){
        return $this->hasMany('App\model\JobSeekerSkill', 'user_id');

    }

    public function JobSeekerFollowers(){
        return $this->hasMany('App\model\JobSeekerFollowers', 'user_id');

    }

    public function JobTemp(){
        return $this->hasMany('App\model\JobTemp', 'user_id');

    }

    public function Languages(){
        return $this->hasMany('App\model\Languages', 'user_id');

    }

    public function LeaveRequest(){
        return $this->hasMany('App\model\LeaveRequest', 'user_id');

    }

    public function RecuriterCv(){
        return $this->hasMany('App\model\RecuriterCv', 'user_id');

    }

    public function RecuriterSearchHistory(){
        return $this->hasMany('App\model\RecuriterSearchHistory', 'user_id');
    }

    public function Reference(){
        return $this->hasMany('App\model\Reference', 'user_id');
    }

    public function Request(){
        return $this->hasMany('App\model\Request', 'user_id');
    }

    public function SearchHistory(){
        return $this->hasMany('App\model\SearchHistory', 'user_id');
    }

}
