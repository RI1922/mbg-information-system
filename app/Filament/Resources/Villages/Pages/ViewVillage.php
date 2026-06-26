<?php

namespace App\Filament\Resources\Villages\Pages;

use App\Filament\Resources\Villages\VillageResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewVillage extends ViewRecord
{
    protected static string $resource = VillageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
