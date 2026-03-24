<?php

namespace App\Filament\Clusters\OrderOfServices\Resources\ServiceOrders\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class ServiceOrderInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('number')
                    ->label('Número da OS: '),
                TextEntry::make('person.name')
                    ->label('Proprietário')
                    ->numeric(),
                TextEntry::make('equipment.type')
                    ->label('Equipamento: ')
                    ->numeric(),
                TextEntry::make('person_type_id')
                    ->label('Técnico: ')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('problem_reported')
                    ->label('Relato do Problema: ')
                    ->columnSpanFull(),
                TextEntry::make('diagnosis')
                    ->label('Diagnóstico: ')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('technical_notes')
                    ->label('Observações Técnicas: ')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('status')
                    ->label('Status: '),
                TextEntry::make('priority')
                    ->label('Prioridade: '),
                TextEntry::make('created_at')
                    ->label('Criado em: ')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->label('Atualizado em: ')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
