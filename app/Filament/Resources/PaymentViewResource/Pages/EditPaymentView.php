<?php

namespace App\Filament\Resources\PaymentViewResource\Pages;

use App\Filament\Resources\PaymentViewResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPaymentView extends EditRecord
{
    protected static string $resource = PaymentViewResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
