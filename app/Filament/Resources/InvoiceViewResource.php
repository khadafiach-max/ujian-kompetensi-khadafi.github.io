<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InvoiceViewResource\Pages;
use App\Filament\Resources\InvoiceViewResource\RelationManagers;
use App\Models\Invoice;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InvoiceViewResource extends Resource
{
    protected static ?string $model = Invoice::class;

    protected static ?string $navigationIcon = 'heroicon-o-arrow-up-on-square-stack';
    protected static ?string $navigationGroup = 'Manajemen Pembayaran SPP';
    protected static ?string $navigationLabel = 'Tagihan SPP';
    protected static ?string $modelLabel = 'Tagihan';
    protected static ?string $pluralModelLabel = 'Daftar Tagihan SPP';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('student_id')
                ->label('ID Santri'),

                TextInput::make('spp_id')
                ->label('ID SPP'),

                TextInput::make('peroid')
                 ->label('Bulan Tagihan'),

                TextInput::make('amount')
                 ->label('Nominal Tagihan'),

                Select::make('status')
                 ->label('Status')
                 ->options([
                    'sudah bayar' => 'Sudah Bayar',
                    'belum bayar' => 'Belum Bayar',
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('student_id')
                    ->Label('ID Santri'),

                TextColumn::make('spp_id')
                    ->Label('ID SPP'),

                TextColumn::make('peroid')
                    ->Label('Bulan Tagihan'),

                TextColumn::make('amount')
                    ->Label('Nominal Tagihan'),

                IconColumn::make('status')
                    ->Label('Status')
                    ->boolean()
                        ->trueIcon('heroicon-o-check-badge')
                        ->falseIcon('heroicon-o-x-mark')
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
            'index' => Pages\ListInvoiceViews::route('/'),
            'create' => Pages\CreateInvoiceView::route('/create'),
            'edit' => Pages\EditInvoiceView::route('/{record}/edit'),
        ];
    }
}
