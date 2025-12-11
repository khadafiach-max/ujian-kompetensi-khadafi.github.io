<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TransactionViewResource\Pages;
use App\Filament\Resources\TransactionViewResource\RelationManagers;
use App\Models\Transaction;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TransactionViewResource extends Resource
{
    protected static ?string $model = Transaction::class;

    protected static ?string $navigationIcon = 'heroicon-o-currency-dollar';
    protected static ?string $navigationGroup = 'Manajemen Keuangan';
    protected static ?string $navigationLabel = 'Laporan Keuangan';
    protected static ?string $modelLabel = 'Laporan';
    protected static ?string $pluralModelLabel = 'Daftar Laporan Keuangan';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('payment_id')
                ->label('ID Pembayaran'),

                TextInput::make('amount')
                ->label('Jumlah Masuk'),

                DatePicker::make('date')
                 ->label('Tanggal Transaksi'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('payment_id')
                    ->Label('ID Pembayaran'),

                TextColumn::make('amount')
                    ->Label('Jumlah Masuk'),

                TextColumn::make('date')
                    ->Label('Tanggal Transaksi'),
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
            'index' => Pages\ListTransactionViews::route('/'),
            'create' => Pages\CreateTransactionView::route('/create'),
            'edit' => Pages\EditTransactionView::route('/{record}/edit'),
        ];
    }
}
