<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PersonType extends Model
{
    protected $guarded = ['id'];

    public function person()
    {
        return $this->belongsTo(Person::class);
    }
}
