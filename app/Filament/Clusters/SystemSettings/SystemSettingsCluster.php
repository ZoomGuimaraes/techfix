<?php

namespace App\Filament\Clusters\SystemSettings;

use BackedEnum;
use Filament\Clusters\Cluster;
use Filament\Support\Icons\Heroicon;

class SystemSettingsCluster extends Cluster
{
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedSquares2x2;

    protected static string | \UnitEnum | null $navigationGroup = 'Configurações';

    protected static ?string $navigationLabel = 'Sistema';

    protected static ?string $title = 'Parametrizações';
}
