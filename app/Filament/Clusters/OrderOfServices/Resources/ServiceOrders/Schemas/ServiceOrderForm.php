<?php

namespace App\Filament\Clusters\OrderOfServices\Resources\ServiceOrders\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ServiceOrderForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('number')
                    ->required(),
                TextInput::make('person_id')
                    ->required()
                    ->numeric(),
                TextInput::make('equipment_id')
                    ->required()
                    ->numeric(),
                TextInput::make('person_type_id')
                    ->numeric(),
                Textarea::make('problem_reported')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('diagnosis')
                    ->columnSpanFull(),
                Textarea::make('technical_notes')
                    ->columnSpanFull(),
                TextInput::make('status')
                    ->required()
                    ->default('open'),
                TextInput::make('priority')
                    ->required()
                    ->default('normal'),
            ]);
    }
}
