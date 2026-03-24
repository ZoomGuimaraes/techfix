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
                    ->label('Número da OS')
                    ->required(),
                TextInput::make('person.name')
                    ->label('Proprietário')
                    ->required()
                    ->numeric(),
                TextInput::make('equipment.type')
                    ->label('Equipamento')
                    ->required()
                    ->numeric(),
                TextInput::make('person_type_id')
                    ->label('Técnico')
                    ->numeric(),
                Textarea::make('problem_reported')
                    ->label('Relato do Problema')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('diagnosis')
                    ->label('Diagnóstico')
                    ->columnSpanFull(),
                Textarea::make('technical_notes')
                    ->label('Observações Técnicas')
                    ->columnSpanFull(),
                TextInput::make('status')
                    ->label('Status')
                    ->required()
                    ->default('open'),
                TextInput::make('priority')
                    ->label('Prioridade')
                    ->required()
                    ->default('normal'),
            ]);
    }
}
