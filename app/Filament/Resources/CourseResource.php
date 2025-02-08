<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Course;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\CourseResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CourseResource\RelationManagers;
use App\Filament\Resources\CourseResource\RelationManagers\ModulesRelationManager;

class CourseResource extends Resource
{
    protected static ?string $model = Course::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';
    protected static ?string $navigationGroup = 'Manage Courses';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make([
                    'default' => 1,
                    'sm' => 1,
                    'lg' => 12,
                ])
                ->schema([
                    Section::make()
                        ->schema([
                            Section::make()
                                ->schema([
                                    Forms\Components\TextInput::make('title')
                                        ->required(),
                                    Forms\Components\RichEditor::make('description')
                                        ->columnSpanFull(),
                                    Forms\Components\RichEditor::make('additional_info')
                                        ->columnSpanFull(),
                                    Forms\Components\RichEditor::make('eligibility')
                                        ->columnSpanFull(),
                                    Forms\Components\RichEditor::make('curriculum')
                                        ->columnSpanFull(),
                                    Forms\Components\RichEditor::make('exam_criteria')
                                        ->columnSpanFull(),
                                    Forms\Components\TextInput::make('certification_authority'),
                                    Forms\Components\Select::make('course_category_id')
                                        ->relationship('courseCategory', 'title')
                                        ->required(),
                                ]),
                        ])->columnSpan(7),
                    Section::make()
                        ->schema([
                            Section::make('SEO')
                                ->schema([
                                    Forms\Components\TextInput::make('seo_title')
                                        ->required()
                                        ->live()
                                        ->debounce(700)
                                        ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),
                                    Forms\Components\TextInput::make('slug')
                                        ->required(),
                                    Forms\Components\TextInput::make('meta_description'),
        
                                ]),
                            Section::make('Media')
                                ->schema([
                                    Forms\Components\FileUpload::make('thumbnail')
                                        ->image()
                                        ->imageEditor(),
                                    Forms\Components\FileUpload::make('hero_image')
                                        ->image()
                                        ->imageEditor(),
                                ]),
                            Section::make('Course Duration')
                                ->schema([
                                    Forms\Components\TextInput::make('course_duration_1')
                                        ->numeric(),
                                    Forms\Components\TextInput::make('course_duration_1_unit'),
                                    Forms\Components\TextInput::make('class_duration_1')
                                        ->numeric(),
                                    Forms\Components\TextInput::make('class_duration_1_unit'),
                                    Forms\Components\TextInput::make('frequency_1')
                                        ->columnSpan(2),
                                ])->collapsible()->columns(2),
                            Section::make('Alternate Duration')
                                ->schema([
                                    Forms\Components\TextInput::make('course_duration_2')
                                        ->numeric(),
                                    Forms\Components\TextInput::make('course_duration_2_unit'),
                                    Forms\Components\TextInput::make('class_duration_2')
                                        ->numeric(),
                                    Forms\Components\TextInput::make('class_duration_2_unit'),
                                    Forms\Components\TextInput::make('frequency_2')
                                        ->columnSpan(2),
                                ])->collapsible()->columns(2)
                        ])->columnSpan(5)
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('thumbnail')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('hero_image'),
                Tables\Columns\TextColumn::make('seo_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('meta_description')
                    ->searchable(),
                Tables\Columns\TextColumn::make('course_duration')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('course_duration_unit')
                    ->searchable(),
                Tables\Columns\TextColumn::make('class_duration')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('class_duration_unit')
                    ->searchable(),
                Tables\Columns\TextColumn::make('frequency')
                    ->searchable(),
                Tables\Columns\TextColumn::make('certification_authority')
                    ->searchable(),
                Tables\Columns\TextColumn::make('courseCategory.title')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            ModulesRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCourses::route('/'),
            'create' => Pages\CreateCourse::route('/create'),
            'edit' => Pages\EditCourse::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
