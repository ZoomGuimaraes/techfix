<?php

namespace App\Filament\Clusters\BasicRegistration\Resources\Parts\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PartForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nome')
                    ->required(),
                TextInput::make('price')
                    ->label('Preço')
                    ->required()
                    ->numeric()
                    ->prefix('$'),
                TextInput::make('stock')
                    ->label('Estoque')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
