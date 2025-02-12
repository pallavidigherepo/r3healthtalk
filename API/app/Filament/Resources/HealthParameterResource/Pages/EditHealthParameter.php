<?php

namespace App\Filament\Resources\HealthParameterResource\Pages;

use App\Filament\Resources\HealthParameterResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHealthParameter extends EditRecord
{
    protected static string $resource = HealthParameterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
