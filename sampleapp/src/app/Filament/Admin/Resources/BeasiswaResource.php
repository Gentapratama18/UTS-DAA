<?php

namespace App\Filament\Admin\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Beasiswa;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Admin\Resources\BeasiswaResource\Pages;
use App\Filament\Admin\Resources\BeasiswaResource\RelationManagers;

class BeasiswaResource extends Resource
{
    protected static ?string $model = Beasiswa::class;
    
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Beasiswa';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('jenis')
                    ->options([
                        'full' => 'Full',
                        'parsial' => 'Parsial',
                        'lainnya' => 'Lainnya',
                    ])
                    ->required()
                    ->label('Jenis Beasiswa'),
                Forms\Components\TextInput::make('nominal')
                    ->numeric()
                    ->default(null),
                Forms\Components\Textarea::make('deskripsi')
                    ->columnSpanFull(),
                Forms\Components\DatePicker::make('tanggal_calon_beasiswa_daftar')
                    ->required(),
                Forms\Components\Select::make('jurusan')
                    ->options([
                        'Teknik-Informatika' => 'Teknik Informatika',
                        'Teknik-Sipil' => 'Teknik Sipil',
                        'Teknik-Mesin' => 'Teknik Mesin',
                        'Teknik-Elektro' => 'Teknik Elektro',
                        'Teknik-Kimia' => 'Teknik Kimia',
                        'Teknik-Industri' => 'Teknik Industri',
                    ])
                    ->required()
                    ->label('Jurusan'),
                Forms\Components\Toggle::make('status')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jenis')
                    ->label('jenis')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('nominal')
                ->numeric()
                ->sortable()
                ->formatStateUsing(fn ($state) => 'Rp ' . number_format($state, 0, ',', '.')),
                Tables\Columns\TextColumn::make('tanggal_calon_beasiswa_daftar')
                    ->date()
                    ->sortable(),
                Tables\Columns\IconColumn::make('status')
                    ->boolean(),
                Tables\Columns\TextColumn::make('jurusan')
                    ->label('jurusan')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
                Tables\Actions\DeleteAction::make(), 
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
            'index' => Pages\ListBeasiswas::route('/'),
            'create' => Pages\CreateBeasiswa::route('/create'),
            'edit' => Pages\EditBeasiswa::route('/{record}/edit'),
        ];
    }
}
