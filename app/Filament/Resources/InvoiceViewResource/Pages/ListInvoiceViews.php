<?php

namespace App\Filament\Resources\InvoiceViewResource\Pages;

use App\Filament\Resources\InvoiceViewResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInvoiceViews extends ListRecords
{
    protected static string $resource = InvoiceViewResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
