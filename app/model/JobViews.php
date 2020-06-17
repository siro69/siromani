<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class JobViews extends Model
{
    public $timestamps = false;
    protected $guarded = [];
    protected $table = 'tbl_job_views';
}
