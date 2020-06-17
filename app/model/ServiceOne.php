<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\model\EmployerProfile;
use App\model\Service;
use App\model\ServiceRequest;

class ServiceOne extends Model
{
    public $timestamps = false;
    protected $guarded = [];
    protected $table = 'tbl_serviceone';

    public function Employer(){
        return $this->belongsTo('App\model\EmployerProfile', 'emp_id');

    }

    public function Service(){
        return $this->belongsTo('App\model\Service', 'service_id');
    }

    public function Request(){
        return $this->belongsTo('App\model\ServiceRequest', 'request_id');
    }
}
