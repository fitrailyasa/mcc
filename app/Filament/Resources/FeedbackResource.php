<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FeedbackResource\Pages;
use App\Filament\Resources\FeedbackResource\RelationManagers;
use App\Models\Feedback;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FeedbackResource extends Resource
{
    protected static ?string $model = Feedback::class;

    protected static ?string $navigationIcon = 'heroicon-o-chart-bar';

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
                Tables\Columns\TextColumn::make('name')->searchable()->sortable()->label('Name'),
                Tables\Columns\TextColumn::make('profession')->searchable()->label('Profession'),
                Tables\Columns\ImageColumn::make('img')
                    ->sortable()
                    ->label('Image')
                    ->disk('public')
                    ->placeholder('No Image')
                    ->circular()
                    ->url(fn($record) => asset('storage/' . $record->img)),
                Tables\Columns\TextColumn::make('rating')->searchable()->placeholder(0)->label('Rating'),
                Tables\Columns\TextColumn::make('review')
                    // ->formatStateUsing(function ($state) {
                    //     return implode(' ', array_slice(explode(' ', $state), 0, 10));
                    // })
                    ->placeholder('No review')
                    ->searchable()
                    ->sortable()
                    ->label('Review'),
            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListFeedback::route('/'),
            // 'create' => Pages\CreateFeedback::route('/create'),
            // 'edit' => Pages\EditFeedback::route('/{record}/edit'),
        ];
    }
}
