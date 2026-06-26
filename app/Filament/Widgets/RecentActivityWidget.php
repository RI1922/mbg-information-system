<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;

class RecentActivityWidget extends Widget
{
    protected string $view = 'filament.widgets.activity';

    protected int|string|array $columnSpan = 1;

    protected static bool $isLazy = false;

    protected static ?int $sort = 6;
}