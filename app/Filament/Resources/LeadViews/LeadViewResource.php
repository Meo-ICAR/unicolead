<?php

namespace App\Filament\Resources\LeadViews;

use App\Filament\Resources\LeadViews\Pages\CreateLeadView;
use App\Filament\Resources\LeadViews\Pages\EditLeadView;
use App\Filament\Resources\LeadViews\Pages\ListLeadViews;
use App\Filament\Resources\LeadViews\Schemas\LeadViewForm;
use App\Filament\Resources\LeadViews\Tables\LeadViewsTable;
use App\Models\LeadView;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class LeadViewResource extends Resource
{
    protected static ?string $model = LeadView::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return LeadViewForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return LeadViewsTable::configure($table);
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
            'index' => ListLeadViews::route('/'),
            'create' => CreateLeadView::route('/create'),
            'edit' => EditLeadView::route('/{record}/edit'),
        ];
    }
}
