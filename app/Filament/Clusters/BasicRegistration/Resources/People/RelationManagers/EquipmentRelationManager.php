<?php

namespace App\Filament\Clusters\BasicRegistration\Resources\People\RelationManagers;

use App\Filament\Clusters\BasicRegistration\Resources\People\PersonResource;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Table;
use Filament\Forms;
use Filament\Schemas\Schema;
use Filament\Tables;

class EquipmentRelationManager extends RelationManager
{
    protected static string $relationship = 'equipment';

    protected static ?string $relatedResource = PersonResource::class;

    protected static ?string $title = 'Equipamentos do Cliente';

    public function form(Schema $schema): Schema
    {
        return $schema
            ->schema([
                Forms\Components\TextInput::make('type')
                    ->label('Tipo de Equipamento')
                    ->required(),
                Forms\Components\TextInput::make('serial_number')
                    ->label('Número de Série'),
                Forms\Components\TextInput::make('brand'),
                Forms\Components\TextInput::make('model'),
                Forms\Components\Textarea::make('notes')
                    ->columnSpanFull(),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('type')->label('Equipamento'),
                Tables\Columns\TextColumn::make('serial_number')->label('Número de Série'),
                // ...
            ])
            ->headerActions([
                CreateAction::make(),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('sort');
    }
}
