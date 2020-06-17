<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    public $timestamps = false;
    protected $guarded = [];
    protected $table = 'tbl_offers';
}
