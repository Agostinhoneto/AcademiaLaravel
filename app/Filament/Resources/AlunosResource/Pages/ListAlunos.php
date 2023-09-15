<?php

namespace App\Filament\Resources\AlunosResource\Pages;

use App\Filament\Resources\AlunosResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAlunos extends ListRecords
{
    protected static string $resource = AlunosResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
