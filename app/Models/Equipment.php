<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    protected $guarded = ['id'];

    public function person()
    {
        return $this->belongsTo(Person::class);
    }

    public function serviceOrders()
    {
        return $this->hasMany(ServiceOrder::class);
    }
}
