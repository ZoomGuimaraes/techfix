<?php

namespace App\Filament\Clusters\BasicRegistration\Resources\Parts\Pages;

use App\Filament\Clusters\BasicRegistration\Resources\Parts\PartResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditPart extends EditRecord
{
    protected static string $resource = PartResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
