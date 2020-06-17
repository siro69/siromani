<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\model\Service;

class UpgradeService extends Model
{
    public $timestamps = false;
    protected $guarded = [];
    protected $table = 'tbl_upgrade_service';

    public function User(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function Service(){
        return $this->belongsTo('App\model\Service', 'service_id');
    }


}
