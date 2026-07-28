<?php

namespace App\Filament\Resources\LeadViews\Pages;

use App\Filament\Resources\LeadViews\LeadViewResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListLeadViews extends ListRecords
{
    protected static string $resource = LeadViewResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
