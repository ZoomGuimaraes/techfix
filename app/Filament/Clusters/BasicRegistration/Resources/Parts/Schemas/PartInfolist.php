<?php

namespace App\Filament\Clusters\BasicRegistration\Resources\Parts\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class PartInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name')
                    ->label('Nome: '),
                TextEntry::make('price')
                    ->label('Preço: ')
                    ->money(),
                TextEntry::make('stock')
                    ->label('Estoque: ')
                    ->numeric(),
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
