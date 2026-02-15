<?php

namespace App\Filament\Admin\Resources\Pages\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class PageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('service_id')
                    ->required()
                    ->numeric(),
                TextInput::make('state_id')
                    ->required()
                    ->numeric(),
                TextInput::make('location_name')
                    ->required(),
                TextInput::make('location_slug')
                    ->required(),
                TextInput::make('meta_title')
                    ->required(),
                TextInput::make('meta_description')
                    ->required(),
                TextInput::make('keywords'),
                Textarea::make('content')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('faqs'),
            ]);
    }
}
