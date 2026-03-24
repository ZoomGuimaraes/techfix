<?php

namespace App\Filament\Clusters\BasicRegistration\Resources\People;

use App\Filament\Clusters\BasicRegistration\BasicRegistrationCluster;
use App\Filament\Clusters\BasicRegistration\Resources\People\Pages\CreatePerson;
use App\Filament\Clusters\BasicRegistration\Resources\People\Pages\EditPerson;
use App\Filament\Clusters\BasicRegistration\Resources\People\Pages\ListPeople;
use App\Filament\Clusters\BasicRegistration\Resources\People\Pages\ViewPerson;
use App\Filament\Clusters\BasicRegistration\Resources\People\Schemas\PersonForm;
use App\Filament\Clusters\BasicRegistration\Resources\People\Schemas\PersonInfolist;
use App\Filament\Clusters\BasicRegistration\Resources\People\Tables\PeopleTable;
use App\Models\Person;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PersonResource extends Resource
{
    protected static ?string $model = Person::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $cluster = BasicRegistrationCluster::class;
    
    protected static string | \UnitEnum | null $navigationGroup = 'Pessoa';

    protected static ?string $modelLabel = 'Pessoa';

    protected static ?string $pluralModelLabel = 'Pessoas';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return PersonForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PersonInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PeopleTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\EquipmentRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPeople::route('/'),
            'create' => CreatePerson::route('/create'),
            'view' => ViewPerson::route('/{record}'),
            'edit' => EditPerson::route('/{record}/edit'),
        ];
    }
}
