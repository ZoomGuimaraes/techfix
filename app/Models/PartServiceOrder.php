<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PartServiceOrder extends Model
{
    protected $guarded = ['id'];

    public function serviceOrder()
    {
        return $this->belongsTo(ServiceOrder::class);
    }

    public function part()
    {
        return $this->belongsTo(Part::class);
    }
}
