<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'tbl_feedback';
    protected $guarded = [];

    public $timestamps = false;
}
