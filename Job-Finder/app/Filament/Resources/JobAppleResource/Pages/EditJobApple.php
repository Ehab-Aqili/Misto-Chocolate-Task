<?php

namespace App\Filament\Resources\JobAppleResource\Pages;

use App\Filament\Resources\JobAppleResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJobApple extends EditRecord
{
    protected static string $resource = JobAppleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
