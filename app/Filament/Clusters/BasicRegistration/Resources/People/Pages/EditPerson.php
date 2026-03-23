<?php

namespace App\Filament\Clusters\BasicRegistration\Resources\People\Pages;

use App\Filament\Clusters\BasicRegistration\Resources\People\PersonResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditPerson extends EditRecord
{
    protected static string $resource = PersonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
