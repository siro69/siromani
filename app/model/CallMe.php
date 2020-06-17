<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class CallMe extends Model
{
    protected $table = 'tbl_call_me';
    protected $guarded = [];

    public $timestamps = false;
}
