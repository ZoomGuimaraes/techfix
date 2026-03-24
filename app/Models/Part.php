<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    protected $guarded = ['id'];

    public function partServiceOrders()
    {
        return $this->hasMany(PartServiceOrder::class);
    }
}
