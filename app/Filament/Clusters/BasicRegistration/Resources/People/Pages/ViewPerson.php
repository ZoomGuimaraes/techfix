<?php

namespace App\Filament\Clusters\BasicRegistration\Resources\People\Pages;

use App\Filament\Clusters\BasicRegistration\Resources\People\PersonResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPerson extends ViewRecord
{
    protected static string $resource = PersonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
