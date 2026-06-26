<?php

namespace App\Filament\Widgets;

use App\Models\School;
use App\Models\Sppg;
use App\Models\Supplier;
use App\Models\Warehouse;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatisticsOverview extends StatsOverviewWidget
{
    protected static ?int $sort = 2;

    protected int|string|array $columnSpan = 'full';

    protected function getStats(): array
    {
        return [

            Stat::make('SPPG', number_format(Sppg::count()))
                ->description('Satuan Pelayanan')
                ->descriptionIcon('heroicon-m-building-office-2')
                ->color('success'),

            Stat::make('Sekolah', number_format(School::count()))
                ->description('Sekolah Terdaftar')
                ->descriptionIcon('heroicon-m-academic-cap')
                ->color('info'),

            Stat::make('Gudang', number_format(Warehouse::count()))
                ->description('Gudang Aktif')
                ->descriptionIcon('heroicon-m-home-modern')
                ->color('warning'),

            Stat::make('Supplier', number_format(Supplier::count()))
                ->description('Mitra Supplier')
                ->descriptionIcon('heroicon-m-truck')
                ->color('danger'),

        ];
    }
}