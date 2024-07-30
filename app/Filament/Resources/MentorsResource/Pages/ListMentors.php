<?php

namespace App\Filament\Resources\MentorsResource\Pages;

use App\Filament\Resources\MentorsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMentors extends ListRecords
{
    protected static string $resource = MentorsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
