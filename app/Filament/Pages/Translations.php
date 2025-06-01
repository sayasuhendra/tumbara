<?php

namespace App\Filament\Pages;

use Filament\Actions\Action;
use Filament\Pages\Page;
use Illuminate\Support\Facades\Artisan;

class Translations extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.translations';

    protected function getHeaderActions(): array
{
    return [
        Action::make('simpan')->action(fn() => Artisan::call('simpan:terjemah')),
    ];
}
}
