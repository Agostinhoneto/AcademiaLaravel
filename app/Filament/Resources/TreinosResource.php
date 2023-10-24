<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TreinosResource\Pages;
use App\Models\Treinos;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Forms;
use Filament\Forms\Components\TextInput;

class TreinosResource extends Resource
{
    protected static ?string $model = Treinos::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {


        return $form
            ->schema([Treinos::make()
            ->schema([
                Forms\Components\TextInput::make('título')
                    ->required()
                    ->disabledOn('edit'),
                Forms\Components\TextInput::make('descricao')
                    ->required(),
                Forms\Components\TextInput::make('duracao')
                    ->required(),
                Forms\Components\TextInput::make('serie')
                    ->required(),
                Forms\Components\TextInput::make('repeticoes')
                    ->required(),
                Forms\Components\TextInput::make('carga')
                    ->required(),
                Forms\Components\DatePicker::make('Data de Inicio')
                    ->required(),
                Forms\Components\DatePicker::make('Data Final')
                    ->required(),
                Forms\Components\RichEditor::make('Observação')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('Instrutor')
                    ->required(),
                Forms\Components\TextInput::make('Grupo Muscular')
                    ->required(),
                Forms\Components\Select::make('aluno_id')
                    ->relationship('alunos', 'nome'),
                    TextInput::make('nome')->required(),
            ])
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('titulo')
                    ->sortable(),
                Tables\Columns\TextColumn::make('descricao')
                    ->searchable(),
                Tables\Columns\TextColumn::make('duracao')
                    ->searchable(),
                Tables\Columns\TextColumn::make('serie')
                    ->searchable(),
                Tables\Columns\TextColumn::make('repeticoes')
                    ->searchable(),
                Tables\Columns\TextColumn::make('carga')
                    ->searchable(),
                Tables\Columns\TextColumn::make('data_inicio')
                    ->searchable(),
                Tables\Columns\TextColumn::make('data_fim')
                    ->searchable(),
                Tables\Columns\TextColumn::make('instrutores_id')
                    ->searchable(),
                Tables\Columns\TextColumn::make('grupo_musculares_id')
                    ->searchable(),
                Tables\Columns\TextColumn::make('aluno_id')
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
            'index' => Pages\ListTreinos::route('/'),
            'create' => Pages\CreateTreinos::route('/create'),
            'edit' => Pages\EditTreinos::route('/{record}/edit'),
        ];
    }
}
