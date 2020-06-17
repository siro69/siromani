<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;


class Advertisement extends Model
{
    public $timestamps = false;
    protected $guarded = [];
    protected $table = 'tbl_advertisement';
}
