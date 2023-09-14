<?php

namespace App\Filament\Resources;
use Filament\Forms\Components\DatePicker;
use App\Filament\Resources\JobAppleResource\Pages;
use App\Filament\Resources\JobAppleResource\RelationManagers;
use App\Models\JobApple;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JobAppleResource extends Resource
{
    protected static ?string $model = JobApple::class;
    protected static ?string $navigationGroup = 'Jobs';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make() ->columns(2)
                  ->schema([
                    Forms\Components\TextInput::make('full_name'),
                    Forms\Components\TextInput::make('address'),
                    Forms\Components\TextInput::make('gender'),
                    Forms\Components\TextInput::make('age'),
                    Forms\Components\TextInput::make('contact_info'),
                    Forms\Components\TextInput::make('years_exp'),
                    Forms\Components\TextInput::make('edu_info'),
                    Forms\Components\TextInput::make('more_info'),
                    Forms\Components\TextInput::make('cv_file_path'),
                    Forms\Components\TextInput::make('job_id'),
                  ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('full_name')
                ->searchable()
                ->sortable() ,
                Tables\Columns\TextColumn::make('address')
                ->sortable() 
                ->toggleable(),
                Tables\Columns\TextColumn::make('gender')->sortable()->toggleable(),
                Tables\Columns\TextColumn::make('age')->sortable()->toggleable(),
                Tables\Columns\TextColumn::make('contact_info')->sortable(),
                Tables\Columns\TextColumn::make('years_exp')->sortable()->toggleable(),
                Tables\Columns\TextColumn::make('edu_info')->sortable()->toggleable(),
                Tables\Columns\TextColumn::make('more_info')->sortable(),
                Tables\Columns\TextColumn::make('cv_file_path')->sortable(),
                Tables\Columns\TextColumn::make('job_id'),
                Tables\Columns\TextColumn::make('created_at')
                ->date()
                ->sortable(),
            ])
            ->filters([
                Tables\Filters\Filter::make('created_at')
                ->form([
                    DatePicker::make('created_from'),
                    DatePicker::make('created_until'),
                ])
                ->query(function (Builder $query, array $data): Builder {
                    return $query
                        ->when(
                            $data['created_from'],
                            fn (Builder $query, $date): Builder => $query->whereDate('created_at', '>=', $date),
                        )
                        ->when(
                            $data['created_until'],
                            fn (Builder $query, $date): Builder => $query->whereDate('created_at', '<=', $date),
                        );
                })
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListJobApples::route('/'),
            'create' => Pages\CreateJobApple::route('/create'),
            'edit' => Pages\EditJobApple::route('/{record}/edit'),
        ];
    }    
}
