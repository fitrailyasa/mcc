<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PackageResource\Pages;
use App\Filament\Resources\PackageResource\RelationManagers;
use App\Models\Package;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PackageResource extends Resource
{
    protected static ?string $model = Package::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->required()->label('Name'),
                Forms\Components\TextInput::make('desc')->required()->label('Description'),
                Forms\Components\FileUpload::make('img')->label('Image')->image(),
                Forms\Components\Select::make('category_id')->relationship('category', 'name')->required()->label('Category'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable()->sortable()->label('Name'),
                Tables\Columns\TextColumn::make('desc')
                    ->formatStateUsing(function ($state) {
                        return implode(' ', array_slice(explode(' ', $state), 0, 10));
                    })
                    ->placeholder('No Desc')
                    ->searchable()
                    ->sortable()
                    ->label('Description'),
                Tables\Columns\ImageColumn::make('img')
                    ->sortable()
                    ->label('Image')
                    ->disk('public', '/')
                    ->placeholder('No Image')
                    ->circular()
                    ->url(fn($record) => asset('storage/' . $record->img)),
                Tables\Columns\TextColumn::make('category.name')->searchable()->label('Category'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListPackages::route('/'),
            // 'create' => Pages\CreatePackage::route('/create'),
            // 'edit' => Pages\EditPackage::route('/{record}/edit'),
        ];
    }
}
