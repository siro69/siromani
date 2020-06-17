<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\model\Service;

class ServiceOptions extends Model
{
    public $timestamps = false;
    protected $guarded = [];
    protected $table = 'tbl_service_options';

    public function Services(){
        return $this->belongsTo('App\model\Service','service_id');
    }
}
