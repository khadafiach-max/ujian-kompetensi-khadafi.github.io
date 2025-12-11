<?php

namespace App\Filament\Resources\TransactionViewResource\Pages;

use App\Filament\Resources\TransactionViewResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTransactionViews extends ListRecords
{
    protected static string $resource = TransactionViewResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
