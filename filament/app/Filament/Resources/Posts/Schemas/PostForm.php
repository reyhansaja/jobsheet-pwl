<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Post Details')
                    ->description('Fill in the details of the post')
                    ->icon('heroicon-o-document-text')
                    ->columnSpan(2)
                    ->schema([
                        TextInput::make('title'),
                        TextInput::make('slug'),
                        Select::make('category_id')
                            ->relationship('category', 'name')
                            ->preload()
                            ->searchable()
                            ->required(),
                        ColorPicker::make('color'),
                        MarkdownEditor::make('content'),
                    ]),

                Group::make([
                    Section::make('Image Upload')
                        ->schema([
                            FileUpload::make('image')
                                ->disk('public')
                                ->directory('posts'),
                        ]),

                    Section::make('Meta Information')
                        ->schema([
                            TagsInput::make('tags'),
                            Checkbox::make('published'),
                            DateTimePicker::make('published_at'),
                        ]),
                ])->columnSpan(1),
            ])
            ->columns(3);
    }
}
