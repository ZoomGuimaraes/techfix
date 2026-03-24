<?php

namespace App\Filament\Clusters\BasicRegistration\Resources\People\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PersonForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('user_id')
                    ->relationship('user', 'email')
                    ->label('Usuário')
                    ->unique()
                    ->searchable(),
                TextInput::make('name')
                    ->label('Nome')
                    ->required(),
                TextInput::make('type')
                    ->label('Tipo')
                    ->required(),
                TextInput::make('address')
                    ->label('Endereço'),
                TextInput::make('number')
                    ->label('Número'),
                TextInput::make('complement')
                    ->label('Complemento'),
                TextInput::make('city')
                    ->label('Cidade'),
                TextInput::make('state')
                    ->label('Estado'),
            ]);
    }
}
