<?php

namespace App\Filament\Resources\BusinessSettings\Pages;

use App\Filament\Resources\BusinessSettings\BusinessSettingResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditBusinessSetting extends EditRecord
{
    protected static string $resource = BusinessSettingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
