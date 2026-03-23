<?php

namespace App\Filament\Clusters\BasicRegistration\Resources\Services;

use App\Filament\Clusters\BasicRegistration\BasicRegistrationCluster;
use App\Filament\Clusters\BasicRegistration\Resources\Services\Pages\CreateService;
use App\Filament\Clusters\BasicRegistration\Resources\Services\Pages\EditService;
use App\Filament\Clusters\BasicRegistration\Resources\Services\Pages\ListServices;
use App\Filament\Clusters\BasicRegistration\Resources\Services\Pages\ViewService;
use App\Filament\Clusters\BasicRegistration\Resources\Services\Schemas\ServiceForm;
use App\Filament\Clusters\BasicRegistration\Resources\Services\Schemas\ServiceInfolist;
use App\Filament\Clusters\BasicRegistration\Resources\Services\Tables\ServicesTable;
use App\Models\Service;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $cluster = BasicRegistrationCluster::class;

    protected static string | \UnitEnum | null $navigationGroup = 'Administração';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return ServiceForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ServiceInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ServicesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListServices::route('/'),
            'create' => CreateService::route('/create'),
            'view' => ViewService::route('/{record}'),
            'edit' => EditService::route('/{record}/edit'),
        ];
    }
}
