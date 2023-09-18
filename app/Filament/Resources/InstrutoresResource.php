<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InstrutoresResource\Pages;
use App\Filament\Resources\InstrutoresResource\RelationManagers;
use App\Models\Alunos;
use App\Models\Instrutores;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Actions\BulkAction;

class InstrutoresResource extends Resource
{
    protected static ?string $model = Instrutores::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\TextInput::make('nome')
                ->required()
                ->disabledOn('edit'),
            Forms\Components\TextInput::make('especializacao')
                ->required(),
            Forms\Components\DatePicker::make('Data de Nascimento')
                ->required(),
            Forms\Components\RichEditor::make('Observação')
                ->columnSpanFull(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('nome')
                ->sortable(),
            Tables\Columns\TextColumn::make('especializacao')
                ->searchable(),
            Tables\Columns\TextColumn::make('data_nascimento')
                ->searchable(),
            Tables\Columns\TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            Tables\Columns\TextColumn::make('updated_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
        ])
        ->filters([
            //
        ])
        /*
        Action::make('edit')
         ->url(fn (Alunos $record): string => route('alunos.edit', $record))
         ->openUrlInNewTab();
        Action::make('delete')
          ->requiresConfirmation()
          ->action(fn (Alunos $record) => $record->delete());
        */

        ->actions([
            Tables\Actions\EditAction::make(),
        ])

        ->bulkActions([
            BulkAction::make('delete')
            ->requiresConfirmation()
            ->action(fn (Collection $records) => $records->each->delete())
        ])
        /*
        ->emptyStateActions([
            Tables\Actions\CreateAction::make(),
        ])*/;
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
