<?php

namespace App\Filament\Clusters\BasicRegistration\Resources\Equipment\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class EquipmentInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('person.name')
                    ->label('Proprietário: ')
                    ->numeric(),
                TextEntry::make('type')
                    ->label('Tipo: '),
                TextEntry::make('brand')
                    ->label('Marca: ')
                    ->placeholder('-'),
                TextEntry::make('model')
                    ->label('Modelo: ')
                    ->placeholder('-'),
                TextEntry::make('serial_number')
                    ->label('Número de Série: ')
                    ->placeholder('-'),
                TextEntry::make('notes')
                    ->label('Observações: ')
                    ->placeholder('-')
                    ->columnSpanFull(),
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
