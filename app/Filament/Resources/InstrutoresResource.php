<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InstrutoresResource\Pages;
use App\Filament\Resources\InstrutoresResource\RelationManagers;
use App\Models\Instrutores;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InstrutoresResource extends Resource
{
    protected static ?string $model = Instrutores::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
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
            'index' => Pages\ListInstrutores::route('/'),
            'create' => Pages\CreateInstrutores::route('/create'),
            'edit' => Pages\EditInstrutores::route('/{record}/edit'),
        ];
    }    
}
