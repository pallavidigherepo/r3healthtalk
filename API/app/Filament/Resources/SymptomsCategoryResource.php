<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SymptomsCategoryResource\Pages;
use App\Filament\Resources\SymptomsCategoryResource\RelationManagers;
use App\Models\SymptomsCategory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SymptomsCategoryResource extends Resource
{
    protected static ?string $model = SymptomsCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

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
            'index' => Pages\ListSymptomsCategories::route('/'),
            'create' => Pages\CreateSymptomsCategory::route('/create'),
            'edit' => Pages\EditSymptomsCategory::route('/{record}/edit'),
        ];
    }
}
