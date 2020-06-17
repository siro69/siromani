<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class SiteLog extends Model
{
    public $timestamps = false;
    protected $guarded = [];
    protected $table = 'site_log';


}
