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
                TextEntry::make('person_id')
                    ->numeric(),
                TextEntry::make('type'),
                TextEntry::make('brand')
                    ->placeholder('-'),
                TextEntry::make('model')
                    ->placeholder('-'),
                TextEntry::make('serial_number')
                    ->placeholder('-'),
                TextEntry::make('notes')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
