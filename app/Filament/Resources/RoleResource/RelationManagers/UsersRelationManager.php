<?php

namespace App\Filament\Resources\RoleResource\RelationManagers;

use Faker\Provider\ar_EG\Text;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UsersRelationManager extends RelationManager
{
    protected static string $relationship = 'users';

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('email')
            ->columns([
                TextColumn::make('email')->toggleable(),
                TextColumn::make('name')->toggleable(),
                TextColumn::make('created_at')->toggleable(),
                TextColumn::make('updated_at')->toggleable(),
                TextColumn::make('col1')->toggleable(),
                TextColumn::make('col2')->toggleable(),
                TextColumn::make('col3')->toggleable(),
                TextColumn::make('col4')->toggleable(),
                TextColumn::make('col5')->toggleable(),
                TextColumn::make('col6')->toggleable(),
                TextColumn::make('col7')->toggleable(),
                TextColumn::make('col8')->toggleable(),
                TextColumn::make('col9')->toggleable(),
                TextColumn::make('col10')->toggleable(),
                TextColumn::make('col11')->toggleable(),
                TextColumn::make('col12')->toggleable(),
                TextColumn::make('col13')->toggleable(),
            ]);
    }
}
