<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StudentsResource\Pages;
use App\Filament\Resources\StudentsResource\RelationManagers;
use App\Models\Groups;
use App\Models\Students;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StudentsResource extends Resource
{
    protected static ?string $model = Students::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('first_name')
                    ->label('Voornaam')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('last_name')
                    ->label('Achternaam')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('birthdate')
                    ->label('Geboortedatum')
                    ->required(),
                Forms\Components\TextInput::make('tel')
                    ->label('Telefoon nummer')
                    ->tel()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('qr_code')
                    ->maxLength(255),
                Forms\Components\Select::make('group_id')
                    ->label('Groep')
                    ->options(groups::all()->pluck('code', 'id'))
                    ->required(),

                Forms\Components\TextInput::make('ec_name')
                    ->label('Nootcontactpersoon naam')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('ec_tel')
                    ->label('Nootcontactpersoon telefoon nummer')
                    ->tel()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('ec_relation')
                    ->label('Nootcontactpersoon relatie')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('wednesday')
                    ->label('Wednesday'),
                Forms\Components\TextInput::make('wednesday_evening')
                    ->label('Wednesday evening')
                    ->maxLength(255),
                Forms\Components\TextInput::make('thursday_morning')
                    ->label('Thursday morning')
                    ->maxLength(255),
                Forms\Components\TextInput::make('stay_overnight')
                    ->label('Stay overnight')
                    ->maxLength(255),
                Forms\Components\TextInput::make('dietary_requirements')
                    ->label('Dietary requirements')
                    ->maxLength(255),
                Forms\Components\TextInput::make('note')
                    ->label('Note')
                    ->maxLength(255),
                Forms\Components\TextInput::make('medicines')
                    ->label('Medicines')
                    ->maxLength(255),
                Forms\Components\TextInput::make('allergies')
                    ->label('Allergies')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('first_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('last_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('birthdate')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tel')
                    ->searchable(),
                Tables\Columns\TextColumn::make('qr_code')
                    ->searchable(),
                Tables\Columns\TextColumn::make('group.code')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListStudents::route('/'),
            'create' => Pages\CreateStudents::route('/create'),
            'edit' => Pages\EditStudents::route('/{record}/edit'),
        ];
    }
}
