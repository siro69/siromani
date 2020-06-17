<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class PushUser extends Model
{
    public $timestamps = false;
    protected $guarded = [];
    protected $table = 'push_user';
}
