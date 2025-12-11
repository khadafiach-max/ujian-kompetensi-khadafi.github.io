<?php

namespace App\Filament\Widgets;

use App\Models\Invoice;
use Filament\Tables;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;

class LatestGeneralJournal extends BaseWidget
{
    protected static ?int $sort = 3;
    protected int | string | array $columnSpan = 'full';

    protected function getTableQuery(): Builder
    {
        return Invoice::query()->latest('peroid');
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('student_id')
                ->label('ID Santri'),

            Tables\Columns\TextColumn::make('spp_id')
                ->label('ID SPP'),

            Tables\Columns\TextColumn::make('peroid')
                ->label('Bulan Tagihan'),

        ];
    }
}
