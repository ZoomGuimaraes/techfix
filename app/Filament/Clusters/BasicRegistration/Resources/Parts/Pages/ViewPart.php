<?php

namespace App\Filament\Clusters\BasicRegistration\Resources\Parts\Pages;

use App\Filament\Clusters\BasicRegistration\Resources\Parts\PartResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPart extends ViewRecord
{
    protected static string $resource = PartResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
