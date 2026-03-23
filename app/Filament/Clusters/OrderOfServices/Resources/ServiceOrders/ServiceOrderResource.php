<?php

namespace App\Filament\Clusters\OrderOfServices\Resources\ServiceOrders;

use App\Filament\Clusters\OrderOfServices\OrderOfServicesCluster;
use App\Filament\Clusters\OrderOfServices\Resources\ServiceOrders\Pages\CreateServiceOrder;
use App\Filament\Clusters\OrderOfServices\Resources\ServiceOrders\Pages\EditServiceOrder;
use App\Filament\Clusters\OrderOfServices\Resources\ServiceOrders\Pages\ListServiceOrders;
use App\Filament\Clusters\OrderOfServices\Resources\ServiceOrders\Pages\ViewServiceOrder;
use App\Filament\Clusters\OrderOfServices\Resources\ServiceOrders\Schemas\ServiceOrderForm;
use App\Filament\Clusters\OrderOfServices\Resources\ServiceOrders\Schemas\ServiceOrderInfolist;
use App\Filament\Clusters\OrderOfServices\Resources\ServiceOrders\Tables\ServiceOrdersTable;
use App\Models\ServiceOrder;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ServiceOrderResource extends Resource
{
    protected static ?string $model = ServiceOrder::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $cluster = OrderOfServicesCluster::class;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return ServiceOrderForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ServiceOrderInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ServiceOrdersTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\ServicesOrderServicesRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListServiceOrders::route('/'),
            'create' => CreateServiceOrder::route('/create'),
            'view' => ViewServiceOrder::route('/{record}'),
            'edit' => EditServiceOrder::route('/{record}/edit'),
        ];
    }
}
