<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class ContentPlanner extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $title = 'Content Planner';
    protected static string $view = 'filament.pages.content-planner';
}
