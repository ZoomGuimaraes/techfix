<?php

namespace App\Filament\Clusters\BasicRegistration\Resources\People\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class PersonInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('user.email')
                    ->label('Usuário: ')
                    ->placeholder('-'),
                TextEntry::make('name')
                    ->label('Nome: '),
                TextEntry::make('type')
                    ->label('Tipo: '),
                TextEntry::make('address')
                    ->label('Endereço: ')
                    ->placeholder('-'),
                TextEntry::make('number')
                    ->label('Número: ')
                    ->placeholder('-'),
                TextEntry::make('complement')
                    ->label('Complemento: ')
                    ->placeholder('-'),
                TextEntry::make('city')
                    ->label('Cidade: ')
                    ->placeholder('-'),
                TextEntry::make('state')
                    ->label('Estado: ')
                    ->placeholder('-'),
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
