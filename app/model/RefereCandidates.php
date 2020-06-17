<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class RefereCandidates extends Model
{
    public $timestamps = false;
    protected $guarded = [];
    protected $table = 'tbl_refere_candidates';
}
