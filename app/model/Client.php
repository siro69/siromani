<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'tbl_clients';
    protected $guarded = [];

    public $timestamps = false;
}
