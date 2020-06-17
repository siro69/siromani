<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;


class ResumePackage extends Model
{
    public $timestamps = false;
    protected $guarded = [];
    protected $table = 'tbl_resume_package';

    public function ResumePackageFeature(){
        return $this->hasMany(' App\model\ResumePackageFeature', 'package_id');
    }
}
