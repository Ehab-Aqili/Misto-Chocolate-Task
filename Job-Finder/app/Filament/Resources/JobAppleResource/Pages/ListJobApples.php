<?php

namespace App\Filament\Resources\JobAppleResource\Pages;

use App\Filament\Resources\JobAppleResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJobApples extends ListRecords
{
    protected static string $resource = JobAppleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
