<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class JobPostingPayment extends Model
{
    public $timestamps = false;
    protected $guarded = [];
    protected $table = 'tbl_jobposting_payment';
}
