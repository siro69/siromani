<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;


class Rcblog extends Model
{
    public $timestamps = false;
    protected $guarded = [];
    protected $table = 'tbl_recblog';

    public function Category(){
        return $this->belongsTo('App\model\Company_Cat', 'cat_id');
    }
}
