<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;


class DeviceInfo extends Model
{
    protected $table = 'device_info';
    protected $guarded = [];

    public $timestamps = false;

    public function User(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
