<?php

namespace App\Filament\Resources\StudentsViewResource\Pages;

use App\Filament\Resources\StudentsViewResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStudentsViews extends ListRecords
{
    protected static string $resource = StudentsViewResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
