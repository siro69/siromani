<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class JobLevel extends Model
{
    public $timestamps = false;
    protected $guarded = [];
    protected $table = 'tbl_joblevel';
}
