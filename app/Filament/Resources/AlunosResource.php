<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AlunosResource\Pages;
use App\Filament\Resources\AlunosResource\RelationManagers;
use App\Models\Alunos;
use Filament\Forms;
use Filament\Forms\Components\Actions\Modal\Actions\Action;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\DatePicker;

class AlunosResource extends Resource
{
    protected static ?string $model = Alunos::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nome')
                    ->required()
                    ->disabledOn('edit'),
                Forms\Components\TextInput::make('sobrenome')
                    ->required(),
                Forms\Components\TextInput::make('cpf')
                    ->required(),
                Forms\Components\TextInput::make('rg')
                    ->required(),
                Forms\Components\TextInput::make('email')
                    ->required()
                    ->unique(Alunos::class, 'email'),
                Forms\Components\TextInput::make('celular')
                    ->required(),
                Forms\Components\TextInput::make('genero')
                    ->required(),
                Forms\Components\TextInput::make('profissão')
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
                Tables\Columns\TextColumn::make('sobrenome')
                    ->searchable(),
                Tables\Columns\TextColumn::make('cpf')
                    ->searchable(),
                Tables\Columns\TextColumn::make('rg')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('celular')
                    ->searchable(),
                Tables\Columns\TextColumn::make('genero')
                    ->searchable(),
                Tables\Columns\TextColumn::make('profissao')
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
            ->actions([
                Tables\Actions\EditAction::make(),
            ]);
        Action::make('edit')
            ->url(fn (Alunos $record): string => route('alunos.edit', $record))
            ->openUrlInNewTab();
        Action::make('delete')
            ->requiresConfirmation()
            ->action(fn (Alunos $record) => $record->delete());
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
            'index' => Pages\ListAlunos::route('/'),
            'create' => Pages\CreateAlunos::route('/create'),
            'edit' => Pages\EditAlunos::route('/{record}/edit'),
        ];
    }
}
