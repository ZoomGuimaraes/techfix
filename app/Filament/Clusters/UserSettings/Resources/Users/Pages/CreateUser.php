<?php

namespace App\Filament\Clusters\UserSettings\Resources\Users\Pages;

use App\Filament\Clusters\UserSettings\Resources\Users\UserResource;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;
}
