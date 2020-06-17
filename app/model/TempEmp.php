<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\User;

class TempEmp extends Model
{
    public $timestamps = false;
    protected $guarded = [];
    protected $table = 'tbl_temp_emp';

    public function User(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
