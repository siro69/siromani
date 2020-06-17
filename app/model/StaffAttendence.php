<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\User;

class StaffAttendence extends Model
{
    public $timestamps = false;
    protected $guarded = [];
    protected $table = 'tbl_staff_attendance';

    public function User(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
