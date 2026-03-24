<?php

namespace App\Filament\Clusters\UserSettings;

use BackedEnum;
use Filament\Clusters\Cluster;
use Filament\Support\Icons\Heroicon;

class UserSettingsCluster extends Cluster
{
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedUser;

    protected static string | \UnitEnum | null $navigationGroup = 'Configurações';

    protected static ?string $navigationLabel = 'Usuários';

    protected static ?string $title = 'Parametrizações';
}
