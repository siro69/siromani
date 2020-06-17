<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Job_Location extends Model
{
    protected $table = 'tbl_locations';
    public $timestamps = false;
    protected $guarded = [];
}
