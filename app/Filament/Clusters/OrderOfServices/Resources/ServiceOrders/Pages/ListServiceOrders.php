<?php

namespace App\Filament\Clusters\OrderOfServices\Resources\ServiceOrders\Pages;

use App\Filament\Clusters\OrderOfServices\Resources\ServiceOrders\ServiceOrderResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListServiceOrders extends ListRecords
{
    protected static string $resource = ServiceOrderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
