<?php

namespace App\Filament\Clusters\BasicRegistration\Resources\People\Pages;

use App\Filament\Clusters\BasicRegistration\Resources\People\PersonResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePerson extends CreateRecord
{
    protected static string $resource = PersonResource::class;
}
