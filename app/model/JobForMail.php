<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class JobForMail extends Model
{
    public $timestamps = false;
    protected $guarded = [];
    protected $table = 'tbl_job_for_mail';
}
