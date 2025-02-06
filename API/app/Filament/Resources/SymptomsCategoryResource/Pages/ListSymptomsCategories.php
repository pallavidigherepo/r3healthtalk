<?php

namespace App\Filament\Resources\SymptomsCategoryResource\Pages;

use App\Filament\Resources\SymptomsCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSymptomsCategories extends ListRecords
{
    protected static string $resource = SymptomsCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
