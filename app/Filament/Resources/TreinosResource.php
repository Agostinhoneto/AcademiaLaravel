<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TreinosResource\Pages;
use App\Filament\Resources\TreinosResource\RelationManagers;
use App\Models\Treinos;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TreinosResource extends Resource
{
    protected static ?string $model = Treinos::class;

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
            'index' => Pages\ListTreinos::route('/'),
            'create' => Pages\CreateTreinos::route('/create'),
            'edit' => Pages\EditTreinos::route('/{record}/edit'),
        ];
    }    
}
