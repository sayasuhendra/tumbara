<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PdfResource\Pages;
use App\Filament\Resources\PdfResource\RelationManagers;
use App\Models\Pdf;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Contracts\View\View;
use Filament\Tables\Actions\Action;
use Filament\Actions\StaticAction;

class PdfResource extends Resource
{
    protected static ?string $model = Pdf::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('judul')
                    ->required(),
                Forms\Components\TextInput::make('deskripsi')
                    ->required(),
                Forms\Components\Select::make('category')
                    ->options([
                              'sayuran' => 'Sayuran',
                              'seafood' => 'Seafood',
                              'daging' => 'Daging',
                              'buah' => 'Buah',   
                    ])->required(),
                Forms\Components\FileUpload::make('cover')
                    ->required(),
                Forms\Components\FileUpload::make('pdf')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('cover')->size(100),
                Tables\Columns\TextColumn::make('judul')
                    ->searchable(),
                Tables\Columns\TextColumn::make('deskripsi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('category')
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
                Action::make('Buka Pdf')
                    ->modalSubmitAction(false)
                    ->modalCancelAction(fn (StaticAction $action) => $action->label('Tutup'))
                    ->modalContent(fn (Pdf $record): View => view(
                        'filament.pdf',
                        ['record' => $record],
                    )),
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManagePdfs::route('/'),
        ];
    }
}
