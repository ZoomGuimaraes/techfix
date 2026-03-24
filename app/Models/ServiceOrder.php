<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceOrder extends Model
{
    protected $guarded = ['id'];

    public function person()
    {
        return $this->belongsTo(Person::class);
    }

    public function equipment()
    {
        return $this->belongsTo(Equipment::class);
    }

    public function personType()
    {
        return $this->belongsTo(PersonType::class);
    }

    public function servicesOrderServices()
    {
        return $this->hasMany(ServiceOrderService::class);
    }

    public function partsOrderParts()
    {
        return $this->hasMany(PartServiceOrder::class);
    }
}
