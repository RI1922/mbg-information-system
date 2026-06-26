<?php

namespace App\Filament\Resources\Sppgs\Pages;

use App\Filament\Resources\Sppgs\SppgResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewSppg extends ViewRecord
{
    protected static string $resource = SppgResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
