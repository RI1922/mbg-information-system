<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;

class OverviewWidget extends Widget
{
    protected string $view = 'filament.widgets.overview';

    protected int|string|array $columnSpan = 'full';

    protected static bool $isLazy = false;

    protected static ?int $sort = 1;
}