<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Transaction;
use App\Models\Students;
use App\Models\SPPPlan;

class StatsDashboard extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Nominal SPP', 'Rp ' . number_format(Transaction::sum('amount'), 0, ',', '.'))
                ->description('Total SPP')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success'),

            Stat::make('Jumlah Santri', Students::whereMonth('created_at', now()->month)->count())
                ->description('Dalam 30 hari terakhir')
                ->descriptionIcon('heroicon-m-users')
                ->color('warning'),

            Stat::make('Total Tarif SPP', SPPPlan::sum('amount'))
                ->description('Jumlah Tarif SPP')
                ->descriptionIcon('heroicon-m-star')
                ->color('info'),
        ];
    }
}
