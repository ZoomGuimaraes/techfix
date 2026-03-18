<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $guarded = ['id'];

    public function legalPerson()
    {
        return $this->hasOne(LegalPerson::class);
    }

    public function naturalPerson()
    {
        return $this->hasOne(NaturalPerson::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function serviceOrders()
    {
        return $this->hasMany(ServiceOrder::class, 'person_id');
    }
    
    public function equipment()
    {
        return $this->hasMany(Equipment::class);
    }

    public function personType()
    {
        return $this->hasOne(PersonType::class);
    }

}
