<?php

namespace App\Filament\Resources\TreinosResource\Pages;

use App\Filament\Resources\TreinosResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTreinos extends EditRecord
{
    protected static string $resource = TreinosResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
