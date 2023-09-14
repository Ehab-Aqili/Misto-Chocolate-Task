<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JobResource\Pages;
use App\Filament\Resources\JobResource\RelationManagers;
use App\Models\Job;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\DatePicker;

class JobResource extends Resource
{
    protected static ?string $model = Job::class;
    
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    
    
    protected static ?string $navigationGroup = 'Jobs';



    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make() ->columns(2)
                  ->schema([
                    Forms\Components\TextInput::make('job_title'),
                    Forms\Components\TextInput::make('salary'),
                    Forms\Components\MarkdownEditor::make('job_des')
                    ->columnSpan('full'),
                  ])
                  ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('job_title')
                ->searchable()
                ->sortable() ,
                Tables\Columns\TextColumn::make('job_des')
                ->sortable(),
                Tables\Columns\TextColumn::make('salary')
                ->sortable(),
           
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
            'index' => Pages\ListJobs::route('/'),
            'create' => Pages\CreateJob::route('/create'),
            'edit' => Pages\EditJob::route('/{record}/edit'),
        ];
    }    
}
