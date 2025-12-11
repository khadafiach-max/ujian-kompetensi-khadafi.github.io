<?php

namespace App\Filament\Resources\TransactionViewResource\Pages;

use App\Filament\Resources\TransactionViewResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTransactionView extends EditRecord
{
    protected static string $resource = TransactionViewResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
