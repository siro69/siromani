<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public $timestamps = false;
    protected $guarded = [];
    protected $table = 'tbl_services';
}
