<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Training extends Model
{
    public $timestamps = false;
    protected $guarded = [];
    protected $table = 'tbl_trainings';

    public function User(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
