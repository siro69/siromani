<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;


class LeaveRequest extends Model
{
    public $timestamps = false;
    protected $guarded = [];
    protected $table = 'tbl_leave_request';

    public function User(){
        return $this->belongsTo('App\User', 'user_id');
    }


}
