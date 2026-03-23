<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceOrderService extends Model
{
    protected $guarded = ['id'];

    public function serviceOrder()
    {
        return $this->belongsTo(ServiceOrder::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    
}
