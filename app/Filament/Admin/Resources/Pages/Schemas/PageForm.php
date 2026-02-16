<?php

namespace App\Filament\Admin\Resources\Pages\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use App\Models\Service;
use App\Models\State;

class PageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('service_id')
                    ->label('Service')
                    ->options(Service::all()->pluck('service', 'id'))
                    ->searchable()
                    ->required(),
                Select::make('state_id')
                    ->label('State')
                    ->options(State::all()->pluck('state', 'id'))
                    ->searchable()
                    ->required(),
                TextInput::make('location_name')
                    ->required()
                    ->live(debounce: 500)
                    ->afterStateUpdated(function ($state, $set) {
                        $set('location_slug', str()->slug($state));
                    }),
                TextInput::make('location_slug')
                    ->required()
                    ->readOnly()
                    ->dehydrated()
                    ->afterStateUpdated(function ($state, $get) {
                        $slug = str()->slug($get('location_name'));
                        return $slug;
                    }),
                TextInput::make('meta_title')
                    ->required(),
                TextInput::make('meta_description')
                    ->required(),
                TextInput::make('keywords'),
                Textarea::make('content')
                    ->required()
                    ->columnSpanFull(),
                Repeater::make('faqs')
                    ->schema([
                        TextInput::make('question')
                            ->required()
                            ->placeholder('Enter question')
                            ->columnSpan(1),
                        Textarea::make('answer')
                            ->required()
                            ->placeholder('Enter answer')
                            ->columnSpan(1),
                    ])
                    ->columns(1)
                    ->itemLabel(fn (array $state): ?string => $state['question'] ?? null)
                    ->addActionLabel('Add FAQ')
                    ->defaultItems(0)
                    ->columnSpanFull()
                    ->mutateRelationshipDataBeforeCreateUsing(function (array $data): array {
                        return $data;
                    })
                    ->mutateRelationshipDataBeforeSaveUsing(function (array $data): array {
                        return $data;
                    }),
            ]);
    }
}
