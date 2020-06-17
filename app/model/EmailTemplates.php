<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class EmailTemplates extends Model
{
    protected $table = 'tbl_email_templates';
    protected $guarded = [];

    public $timestamps = false;
}
