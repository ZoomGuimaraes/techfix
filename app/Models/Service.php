<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $guarded = ['id'];

    public function serviceOrderServices()
    {
        return $this->hasMany(ServiceOrderService::class);
    }


}
