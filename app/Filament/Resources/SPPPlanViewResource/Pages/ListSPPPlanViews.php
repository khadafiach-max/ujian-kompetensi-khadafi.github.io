<?php

namespace App\Filament\Resources\SPPPlanViewResource\Pages;

use App\Filament\Resources\SPPPlanViewResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSPPPlanViews extends ListRecords
{
    protected static string $resource = SPPPlanViewResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
