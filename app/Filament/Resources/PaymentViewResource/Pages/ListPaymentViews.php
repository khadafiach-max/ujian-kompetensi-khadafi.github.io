<?php

namespace App\Filament\Resources\PaymentViewResource\Pages;

use App\Filament\Resources\PaymentViewResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPaymentViews extends ListRecords
{
    protected static string $resource = PaymentViewResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
