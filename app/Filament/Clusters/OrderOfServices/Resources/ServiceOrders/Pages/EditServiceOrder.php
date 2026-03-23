<?php

namespace App\Filament\Clusters\OrderOfServices\Resources\ServiceOrders\Pages;

use App\Filament\Clusters\OrderOfServices\Resources\ServiceOrders\ServiceOrderResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditServiceOrder extends EditRecord
{
    protected static string $resource = ServiceOrderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
