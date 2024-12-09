<?php

namespace App\Filament\Resources\JamasResource\Pages;

use App\Filament\Resources\JamasResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJamas extends EditRecord
{
    protected static string $resource = JamasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
