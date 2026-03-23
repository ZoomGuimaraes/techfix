<?php

namespace App\Filament\Clusters\BasicRegistration\Resources\Parts\Pages;

use App\Filament\Clusters\BasicRegistration\Resources\Parts\PartResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePart extends CreateRecord
{
    protected static string $resource = PartResource::class;
}
