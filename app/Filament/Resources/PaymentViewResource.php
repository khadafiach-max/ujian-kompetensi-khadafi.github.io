<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PaymentViewResource\Pages;
use App\Filament\Resources\PaymentViewResource\RelationManagers;
use App\Models\Payment;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PaymentViewResource extends Resource
{
    protected static ?string $model = Payment::class;

    protected static ?string $navigationIcon = 'heroicon-o-banknotes';
    protected static ?string $navigationGroup = 'Manajemen Pembayaran SPP';
    protected static ?string $navigationLabel = 'Pembayaran SPP';
    protected static ?string $modelLabel = 'Pembayaran';
    protected static ?string $pluralModelLabel = 'Daftar Pembayaran';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('invoice_id')
                ->label('ID Tagihan yang dibayar'),

                TextInput::make('student_id')
                ->label('ID Santri'),

                TextInput::make('amount')
                 ->label('Jumlah pembayaran'),

                DatePicker::make('payment_date')
                 ->label('Tanggal pembayaran'),

                Select::make('method')
                ->Label('Metode Pembayaran')
                ->options([
                    'cash' => 'Cash',
                    'qris' => 'Qris',
                    'debit' => 'Debit',
                    'transfer' => 'Transfer',
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('invoice_id')
                    ->Label('ID Tagihan yang dibayar'),

                TextColumn::make('student_id')
                    ->Label('ID Santri'),

                TextColumn::make('amount')
                    ->Label('Jumlah pembayaran'),

                TextColumn::make('payment_date')
                    ->Label('Tanggal pembayaran'),

                TextColumn::make('method')
                    ->Label('Metode Pembayaran'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPaymentViews::route('/'),
            'create' => Pages\CreatePaymentView::route('/create'),
            'edit' => Pages\EditPaymentView::route('/{record}/edit'),
        ];
    }
}
