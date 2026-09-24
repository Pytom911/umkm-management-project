<?php

namespace App\Filament\Resources\BusinessSettings;

use App\Filament\Resources\BusinessSettings\Pages\CreateBusinessSetting;
use App\Filament\Resources\BusinessSettings\Pages\EditBusinessSetting;
use App\Filament\Resources\BusinessSettings\Pages\ListBusinessSettings;
use App\Filament\Resources\BusinessSettings\Schemas\BusinessSettingForm;
use App\Filament\Resources\BusinessSettings\Tables\BusinessSettingsTable;
use App\Models\BusinessSetting;
use BackedEnum;
use Filament\Resources\Resource;
use UnitEnum;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class BusinessSettingResource extends Resource
{
    protected static ?string $model = BusinessSetting::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedBuildingOffice2;

    protected static UnitEnum|string|null $navigationGroup = 'Pengaturan';

    protected static ?string $modelLabel = 'Pengaturan Bisnis';

    protected static ?string $pluralModelLabel = 'Pengaturan Bisnis';

    protected static ?string $navigationLabel = 'Pengaturan Bisnis';

    public static function form(Schema $schema): Schema
    {
        return BusinessSettingForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return BusinessSettingsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListBusinessSettings::route('/'),
            'create' => CreateBusinessSetting::route('/create'),
            'edit' => EditBusinessSetting::route('/{record}/edit'),
        ];
    }
}
