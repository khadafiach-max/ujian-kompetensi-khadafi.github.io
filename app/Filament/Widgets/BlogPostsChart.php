<?php

namespace App\Filament\Widgets;

use App\Models\Payment;
use Filament\Widgets\ChartWidget;

class BlogPostsChart extends ChartWidget
{
    protected static ?int $sort = 2;
    protected static ?string $heading = 'Pembayaran SPP';
    
    protected function getData(): array
    {
        // Ambil total transaksi per bulan
        $payment = Payment::selectRaw('MONTH(created_at) as month, COUNT(*) as total')
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('total', 'month');

        // Siapkan label bulan
        $labels = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

        // Cocokkan data bulan yang kosong => isi 0
        $data = [];
        for ($i = 1; $i <= 12; $i++) {
            $data[] = $payment[$i] ?? 0;
        }

        return [
            'datasets' => [
                [
                    'label' => 'Pembayaran SPP Tahunan',
                    'data' => $data,
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }

    protected int|string|array $columnSpan = 'full';
    protected static ?int $chartHeight = 400;
}
