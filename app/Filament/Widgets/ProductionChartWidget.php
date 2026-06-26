<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class ProductionChartWidget extends ChartWidget
{
    protected ?string $heading = 'Produksi Mingguan';

    protected static ?int $sort = 3;

   protected int|string|array $columnSpan = [
    'md' => 1,
    'xl' => 1,
];

    protected function getType(): string
    {
        return 'line';
    }

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Produksi',
                    'data' => [120, 145, 132, 168, 174, 181, 193],
                ],
            ],

            'labels' => [
                'Sen',
                'Sel',
                'Rab',
                'Kam',
                'Jum',
                'Sab',
                'Min',
            ],
        ];
    }
}