<?php

namespace App\Filament\Resources\MentorsResource\Pages;

use App\Filament\Resources\MentorsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMentors extends EditRecord
{
    protected static string $resource = MentorsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
