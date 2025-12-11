<?php

namespace App\Filament\Resources\SPPPlanViewResource\Pages;

use App\Filament\Resources\SPPPlanViewResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSPPPlanView extends EditRecord
{
    protected static string $resource = SPPPlanViewResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
