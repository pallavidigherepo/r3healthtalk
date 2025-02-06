<?php

namespace App\Filament\Resources\SymptomsCategoryResource\Pages;

use App\Filament\Resources\SymptomsCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSymptomsCategory extends EditRecord
{
    protected static string $resource = SymptomsCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
