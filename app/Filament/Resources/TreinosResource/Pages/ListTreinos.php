<?php

namespace App\Filament\Resources\TreinosResource\Pages;

use App\Filament\Resources\TreinosResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTreinos extends ListRecords
{
    protected static string $resource = TreinosResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
