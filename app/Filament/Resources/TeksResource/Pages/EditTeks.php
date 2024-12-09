<?php

namespace App\Filament\Resources\TeksResource\Pages;

use App\Filament\Resources\TeksResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTeks extends EditRecord
{
    protected static string $resource = TeksResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
