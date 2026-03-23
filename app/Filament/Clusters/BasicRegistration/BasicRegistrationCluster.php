<?php

namespace App\Filament\Clusters\BasicRegistration;

use BackedEnum;
use Filament\Clusters\Cluster;
use Filament\Support\Icons\Heroicon;

class BasicRegistrationCluster extends Cluster
{
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedSquares2x2;

    protected static string | \UnitEnum | null $navigationGroup = 'Funcionalidades básicas';

    protected static ?string $navigationLabel = 'Cadastro básico';

    protected static ?string $title = 'Cadastro básico';
}
