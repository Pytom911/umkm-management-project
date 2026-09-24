<?php

namespace App\Filament\Resources\BusinessSettings\Pages;

use App\Filament\Resources\BusinessSettings\BusinessSettingResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListBusinessSettings extends ListRecords
{
    protected static string $resource = BusinessSettingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
