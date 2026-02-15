<?php

namespace App\Filament\Admin\Resources\States\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class StateForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('state')
                    ->required(),
                FileUpload::make('state_image')
                    ->image()
                    ->required(),
            ]);
    }
}
