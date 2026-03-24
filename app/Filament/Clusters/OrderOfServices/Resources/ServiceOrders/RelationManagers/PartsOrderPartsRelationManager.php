<?php

namespace App\Filament\Clusters\OrderOfServices\Resources\ServiceOrders\RelationManagers;

use App\Filament\Clusters\OrderOfServices\Resources\ServiceOrders\ServiceOrderResource;
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

class PartsOrderPartsRelationManager extends RelationManager
{
    protected static string $relationship = 'partsOrderParts';

    protected static ?string $relatedResource = ServiceOrderResource::class;

    protected static ?string $title = 'Peças da OS';

    public function form(Schema $schema): Schema
    {
        return $schema
            ->schema([
                Forms\Components\Select::make('part_id')
                    ->label('Peças')
                    ->relationship('part', 'name')
                    ->required(),
                Forms\Components\TextInput::make('quantity')
                    ->label('Quantidade')
                    ->numeric()
                    ->required(),
                Forms\Components\TextInput::make('price')
                    ->label('Preço (em centavos)')
                    ->numeric()
                    ->required(),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
            Tables\Columns\TextColumn::make('part.name')->label('Peças'),
            Tables\Columns\TextColumn::make('part.description')->label('Descrição'),
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
