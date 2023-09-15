<?php

namespace App\Filament\Resources\InstrutoresResource\Pages;

use App\Filament\Resources\InstrutoresResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInstrutores extends EditRecord
{
    protected static string $resource = InstrutoresResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
