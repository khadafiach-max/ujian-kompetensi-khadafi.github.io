<?php

namespace App\Filament\Resources\PaymentViewResource\Pages;

use App\Filament\Resources\PaymentViewResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePaymentView extends CreateRecord
{
    protected static string $resource = PaymentViewResource::class;
}
