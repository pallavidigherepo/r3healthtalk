<?php

namespace App\Filament\Resources\WellnessCategoryResource\Pages;

use App\Filament\Resources\WellnessCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWellnessCategory extends EditRecord
{
    protected static string $resource = WellnessCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
