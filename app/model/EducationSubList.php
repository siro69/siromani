<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;


class EducationSubList extends Model
{
    protected $table = 'tbl_eductaion_sub_list';
    protected $guarded = [];

    public $timestamps = false;

    public function Category(){
        return $this->belongsTo('App\model\Company_Cat', 'cat_id');
    }
}
