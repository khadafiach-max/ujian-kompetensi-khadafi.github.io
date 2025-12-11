<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StudentsViewResource\Pages;
use App\Filament\Resources\StudentsViewResource\RelationManagers;
use App\Models\Students;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\select;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StudentsViewResource extends Resource
{
    protected static ?string $model = Students::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationGroup = 'Manajemen Daftar Santri';
    protected static ?string $navigationLabel = 'Santri';
    protected static ?string $modelLabel = 'Santri';
    protected static ?string $pluralModelLabel = 'Daftar Santri';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('Student_id')
                ->Label('ID Santri'),

                TextInput::make('NISN')
                ->label('NISN'),

                TextInput::make('names_students')
                 ->label('Nama Santri'),

                TextInput::make('students_class')
                ->label('Kelas'),

                select::make('students_status')
                ->label('Status Santri')
                ->options([
                        'aktif' => 'Aktif',
                        'lulus' => 'Lulus',
                        'keluar' => 'Keluar',
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('NISN')
                    ->Label('NISN'),

                TextColumn::make('names_students')
                    ->Label('Nama Santri'),

                TextColumn::make('students_class')
                    ->Label('Kelas'),

                TextColumn::make('students_status')
                    ->Label('Status Santri')
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
            'index' => Pages\ListStudentsViews::route('/'),
            'create' => Pages\CreateStudentsView::route('/create'),
            'edit' => Pages\EditStudentsView::route('/{record}/edit'),
        ];
    }
}
