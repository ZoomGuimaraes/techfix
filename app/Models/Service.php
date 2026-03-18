<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $guarded = ['id'];

    public function serviceOrders()
    {
        return $this->belongsToMany(ServiceOrder::class)
                    ->withPivot('quantity', 'price')
                    ->withTimestamps();
    }

}
