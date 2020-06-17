<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;


class Company_Cat extends Model
{
    protected $guarded = [];
    public $timestamps = false;
    protected $table = 'tbl_company_category';

    public function JobsTemp(){
        return $this->hasMany('App\model\JobsTemp', 'cat_id');
    }


}
