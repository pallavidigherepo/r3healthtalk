<?php

namespace App\Filament\Resources\WellnessCategoryResource\Pages;

use App\Filament\Resources\WellnessCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWellnessCategories extends ListRecords
{
    protected static string $resource = WellnessCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
