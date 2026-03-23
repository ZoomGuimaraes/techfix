<?php

namespace App\Filament\Clusters\OrderOfServices;

use BackedEnum;
use Filament\Clusters\Cluster;
use Filament\Support\Icons\Heroicon;

class OrderOfServicesCluster extends Cluster
{
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedSquares2x2;

    protected static string | \UnitEnum | null $navigationGroup = 'Funcionalidades básicas';

    protected static ?string $navigationLabel = 'Ordem de serviços';

    protected static ?string $title = 'Ordem de serviços';
}
