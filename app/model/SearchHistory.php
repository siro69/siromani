<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\model\Company_Cat;

class SearchHistory extends Model
{
    public $timestamps = false;
    protected $guarded = [];
    protected $table = 'tbl_search_history';

    public function User(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function Category(){
        return $this->belongsTo('App\model\Company_Cat', 'cat_id');
    }
}
