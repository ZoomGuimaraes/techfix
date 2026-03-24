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
                    ->label('Proprietário')
                    ->relationship('person', 'name')
                    ->searchable()
                    ->required(),
                TextInput::make('type')
                    ->label('Tipo')
                    ->required(),
                TextInput::make('brand')
                    ->label('Marca'),
                TextInput::make('model')
                    ->label('Modelo'),
                TextInput::make('serial_number')
                    ->label('Número de Série'),
                Textarea::make('notes')
                    ->label('Observações')
                    ->columnSpanFull(),
            ]);
    }
}
