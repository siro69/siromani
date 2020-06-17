<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;


class ResumePackageFeature extends Model
{
    public $timestamps = false;
    protected $guarded = [];
    protected $table = 'tbl_resume_package_feature';

    public function Package(){
        return $this->belongsTo('App\model\ResumePackage','package_id');
    }
}
