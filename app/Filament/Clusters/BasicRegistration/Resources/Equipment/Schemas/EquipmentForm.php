<?php

namespace App\Filament\Clusters\BasicRegistration\Resources\Equipment\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class EquipmentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('person_id')
                    ->label('Cliente')
                    ->relationship('person', 'name')
                    ->searchable()
                    ->required(),
                TextInput::make('type')
                    ->required(),
                TextInput::make('brand'),
                TextInput::make('model'),
                TextInput::make('serial_number'),
                Textarea::make('notes')
                    ->columnSpanFull(),
            ]);
    }
}
