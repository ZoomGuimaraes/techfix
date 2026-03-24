<?php

namespace App\Filament\Clusters\BasicRegistration\Resources\Services\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class ServiceInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name')
                    ->label('Nome: '),
                TextEntry::make('description')
                    ->label('Descrição: ')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('price')
                    ->label('Preço: ')
                    ->money(),
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
