<?php

namespace App\Filament\Clusters\BasicRegistration\Resources\Parts;

use App\Filament\Clusters\BasicRegistration\BasicRegistrationCluster;
use App\Filament\Clusters\BasicRegistration\Resources\Parts\Pages\CreatePart;
use App\Filament\Clusters\BasicRegistration\Resources\Parts\Pages\EditPart;
use App\Filament\Clusters\BasicRegistration\Resources\Parts\Pages\ListParts;
use App\Filament\Clusters\BasicRegistration\Resources\Parts\Pages\ViewPart;
use App\Filament\Clusters\BasicRegistration\Resources\Parts\Schemas\PartForm;
use App\Filament\Clusters\BasicRegistration\Resources\Parts\Schemas\PartInfolist;
use App\Filament\Clusters\BasicRegistration\Resources\Parts\Tables\PartsTable;
use App\Models\Part;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PartResource extends Resource
{
    protected static ?string $model = Part::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $cluster = BasicRegistrationCluster::class;

    protected static string | \UnitEnum | null $navigationGroup = 'Administração';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return PartForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PartInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PartsTable::configure($table);
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
            'index' => ListParts::route('/'),
            'create' => CreatePart::route('/create'),
            'view' => ViewPart::route('/{record}'),
            'edit' => EditPart::route('/{record}/edit'),
        ];
    }
}
