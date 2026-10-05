<?php

namespace App\Filament\Resources\LeadViews\Pages;

use App\Filament\Resources\LeadViews\LeadViewResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditLeadView extends EditRecord
{
    protected static string $resource = LeadViewResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
