<?php

namespace App\Filament\Resources\WarehouseStocks;

use App\Filament\Resources\WarehouseStocks\Pages\CreateWarehouseStock;
use App\Filament\Resources\WarehouseStocks\Pages\EditWarehouseStock;
use App\Filament\Resources\WarehouseStocks\Pages\ListWarehouseStocks;
use App\Filament\Resources\WarehouseStocks\Pages\ViewWarehouseStock;
use App\Filament\Resources\WarehouseStocks\Schemas\WarehouseStockForm;
use App\Filament\Resources\WarehouseStocks\Schemas\WarehouseStockInfolist;
use App\Filament\Resources\WarehouseStocks\Tables\WarehouseStocksTable;
use App\Models\WarehouseStock;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class WarehouseStockResource extends Resource
{
    protected static ?string $model = WarehouseStock::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedArchiveBox;

    protected static string|UnitEnum|null $navigationGroup = 'Inventory';

    protected static ?string $navigationLabel = 'Stok Gudang';

    protected static ?int $navigationSort = 4;

    protected static ?string $recordTitleAttribute = 'item_id';

    public static function form(Schema $schema): Schema
    {
        return WarehouseStockForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return WarehouseStockInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return WarehouseStocksTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListWarehouseStocks::route('/'),
            'create' => CreateWarehouseStock::route('/create'),
            'view' => ViewWarehouseStock::route('/{record}'),
            'edit' => EditWarehouseStock::route('/{record}/edit'),
        ];
    }
}