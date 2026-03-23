<?php

namespace App\Filament\Clusters\BasicRegistration\Resources\Equipment;

use App\Filament\Clusters\BasicRegistration\BasicRegistrationCluster;
use App\Filament\Clusters\BasicRegistration\Resources\Equipment\Pages\CreateEquipment;
use App\Filament\Clusters\BasicRegistration\Resources\Equipment\Pages\EditEquipment;
use App\Filament\Clusters\BasicRegistration\Resources\Equipment\Pages\ListEquipment;
use App\Filament\Clusters\BasicRegistration\Resources\Equipment\Pages\ViewEquipment;
use App\Filament\Clusters\BasicRegistration\Resources\Equipment\Schemas\EquipmentForm;
use App\Filament\Clusters\BasicRegistration\Resources\Equipment\Schemas\EquipmentInfolist;
use App\Filament\Clusters\BasicRegistration\Resources\Equipment\Tables\EquipmentTable;
use App\Models\Equipment;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class EquipmentResource extends Resource
{
    protected static ?string $model = Equipment::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $cluster = BasicRegistrationCluster::class;

    protected static string | \UnitEnum | null $navigationGroup = 'Pessoa';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return EquipmentForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return EquipmentInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return EquipmentTable::configure($table);
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
            'index' => ListEquipment::route('/'),
            'create' => CreateEquipment::route('/create'),
            'view' => ViewEquipment::route('/{record}'),
            'edit' => EditEquipment::route('/{record}/edit'),
        ];
    }
}
