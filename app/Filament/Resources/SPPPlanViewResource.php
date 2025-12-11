<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SPPPlanViewResource\Pages;
use App\Filament\Resources\SPPPlanViewResource\RelationManagers;
use App\Models\SPPPlan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SPPPlanViewResource extends Resource
{
    protected static ?string $model = SPPPlan::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';
    protected static ?string $navigationGroup = 'Manajemen Pembayaran SPP';
    protected static ?string $navigationLabel = 'Tarif SPP';
    protected static ?string $modelLabel = 'Tarif';
    protected static ?string $pluralModelLabel = 'Daftar Tarif SPP';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('spp_id')
                ->Label('ID SPP'),

                TextInput::make('amount')
                ->Label('Nominal SPP'),
                
                TextInput::make('peroid')
                 ->label('Bulan'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('amount')
                    ->Label('Nominal SPP'),

                TextColumn::make('peroid')
                    ->Label('Bulan'),
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
            'index' => Pages\ListSPPPlanViews::route('/'),
            'create' => Pages\CreateSPPPlanView::route('/create'),
            'edit' => Pages\EditSPPPlanView::route('/{record}/edit'),
        ];
    }
}
