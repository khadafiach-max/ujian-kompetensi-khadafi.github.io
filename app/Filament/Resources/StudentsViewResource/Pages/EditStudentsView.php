<?php

namespace App\Filament\Resources\StudentsViewResource\Pages;

use App\Filament\Resources\StudentsViewResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStudentsView extends EditRecord
{
    protected static string $resource = StudentsViewResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
