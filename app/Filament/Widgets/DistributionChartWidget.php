<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class DistributionChartWidget extends ChartWidget
{
    protected ?string $heading = 'Distribusi Mingguan';

    protected static ?int $sort = 4;

protected int|string|array $columnSpan = [
    'md' => 1,
    'xl' => 1,
];

    protected function getType(): string
    {
        return 'bar';
    }

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Distribusi',
                    'data' => [91, 104, 112, 120, 131, 145, 158],
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