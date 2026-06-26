<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\DistributionChartWidget;

use App\Filament\Widgets\ProductionChartWidget;
use App\Filament\Widgets\StatisticsWidget;
use Filament\Pages\Dashboard as BaseDashboard;
use App\Filament\Widgets\StatisticsOverview;

class Dashboard extends BaseDashboard
{
    protected static ?string $title = 'Dashboard';

    protected static ?string $navigationLabel = 'Dashboard';

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-home';

    public function getWidgets(): array
    {
        return [
            
            StatisticsOverview::class,
            ProductionChartWidget::class,
            DistributionChartWidget::class,
            
        ];
    }
}