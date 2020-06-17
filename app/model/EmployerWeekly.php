<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;


class EmployerWeekly extends Model
{
    protected $table = 'tbl_employer_weekly';
    protected $guarded = [];

    public $timestamps = false;

    public function User(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
