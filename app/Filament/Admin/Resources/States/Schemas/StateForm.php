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
                    ->disk('public')           // Explicitly use the 'public' disk
                    ->directory('state_images') // This will store in storage/app/public/state_images
                    ->visibility('public')      // Makes the file publicly accessible
                    ->required()
                    ->preserveFilenames()      // Keeps original filenames
                    ->imageResizeMode('cover')  // Optional: Better image handling
                    ->imageResizeTargetWidth('800') // Optional: Resize large images
                    ->imageResizeTargetHeight('600')
         
            ]);
    }
}
