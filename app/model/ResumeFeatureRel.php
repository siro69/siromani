<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class ResumeFeatureRel extends Model
{
    public $timestamps = false;
    protected $guarded = [];
    protected $table = 'tbl_resume_feature_rel';
}
