<?php

namespace App\Filament\Clusters\BasicRegistration\Resources\Services\Pages;

use App\Filament\Clusters\BasicRegistration\Resources\Services\ServiceResource;
use Filament\Resources\Pages\CreateRecord;

class CreateService extends CreateRecord
{
    protected static string $resource = ServiceResource::class;
}
