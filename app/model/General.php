<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class General extends Model
{
    protected $table = 'tbl_general';
    protected $guarded = [];

    public $timestamps = false;
}
