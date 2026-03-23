<?php

namespace App\Filament\Clusters\BasicRegistration\Resources\People\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PersonForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('user_id')
                    ->numeric(),
                TextInput::make('name')
                    ->required(),
                TextInput::make('type')
                    ->required(),
                TextInput::make('address'),
                TextInput::make('number'),
                TextInput::make('complement'),
                TextInput::make('city'),
                TextInput::make('state'),
            ]);
    }
}
