<?php

namespace App\Filament\Resources\BusinessSettings\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class BusinessSettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Usaha')
                    ->description('Nama dan identitas bisnis kamu')
                    ->columns(2)
                    ->schema([
                        TextInput::make('business_name')
                            ->label('Nama Usaha')
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),
                        FileUpload::make('logo')
                            ->label('Logo')
                            ->image()
                            ->directory('logos'),
                        Textarea::make('description')
                            ->label('Deskripsi')
                            ->rows(3)
                            ->columnSpanFull(),
                    ]),
                Section::make('Kontak & Media Sosial')
                    ->description('Cara pelanggan menghubungi kamu')
                    ->columns(2)
                    ->schema([
                        TextInput::make('phone')
                            ->label('Telepon')
                            ->tel()
                            ->placeholder('08xxxxxxxxxx'),
                        TextInput::make('whatsapp')
                            ->label('WhatsApp')
                            ->tel()
                            ->placeholder('08xxxxxxxxxx'),
                        TextInput::make('instagram')
                            ->label('Instagram')
                            ->prefix('@'),
                        TextInput::make('opening_hours')
                            ->label('Jam Operasional')
                            ->placeholder('Senin–Sabtu, 08.00–17.00'),
                        Textarea::make('address')
                            ->label('Alamat')
                            ->rows(2)
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}