<?php

namespace App\Filament\Clusters\BasicRegistration\Resources\Equipment\Pages;

use App\Filament\Clusters\BasicRegistration\Resources\Equipment\EquipmentResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewEquipment extends ViewRecord
{
    protected static string $resource = EquipmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
