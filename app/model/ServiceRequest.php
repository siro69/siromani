<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\model\EmployerProfile;
use App\model\Service;

class ServiceRequest extends Model
{
    public $timestamps = false;
    protected $guarded = [];
    protected $table = 'tbl_service_requests';

    public function Employer(){
        return $this->belongsTo(' App\model\EmployerProfile','emp_id');
    }

    public function Services(){
        return $this->belongsTo(' App\model\Service', 'service_id');
    }
}
