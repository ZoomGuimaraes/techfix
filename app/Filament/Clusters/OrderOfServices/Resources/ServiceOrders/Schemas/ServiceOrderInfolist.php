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
                TextEntry::make('number'),
                TextEntry::make('person_id')
                    ->numeric(),
                TextEntry::make('equipment_id')
                    ->numeric(),
                TextEntry::make('person_type_id')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('problem_reported')
                    ->columnSpanFull(),
                TextEntry::make('diagnosis')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('technical_notes')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('status'),
                TextEntry::make('priority'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
