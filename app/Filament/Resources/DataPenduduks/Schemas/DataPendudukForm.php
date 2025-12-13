<?php

namespace App\Filament\Resources\DataPenduduks\Schemas;

use Filament\Actions\Action;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Flex;
use Filament\Schemas\Components\Grid;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\DatePicker;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;

class DataPendudukForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('no_kk')
                    ->required(),
                TextInput::make('nik')
                    ->required(),
                TextInput::make('nama_lengkap')
                    ->required(),
                Select::make('jenis_kelamin')
                    ->options(['L' => 'Laki laki', 'P' => 'Perempuan'])
                    ->required(),
                DatePicker::make('tanggal_lahir')
                    ->required(),
                Select::make('status_keluarga_id')
                    ->relationship('statusKeluarga', 'nama_status')
                    ->searchable()
                    ->preload()
                    ->createOptionForm([
                        TextInput::make('nama_status')->required(),
                    ])
                    ->nullable(),

                Select::make('status_kawin_id')
                    ->relationship('statusKawin', 'nama_status')
                    ->searchable()
                    ->preload()
                    ->createOptionForm([
                        TextInput::make('nama_status')->required(),
                    ])
                    ->nullable(),

                Select::make('agama_id')
                    ->relationship('agama', 'nama_agama')
                    ->searchable()
                    ->preload()
                    ->createOptionForm([
                        TextInput::make('nama_agama')->required(),
                    ])
                    ->nullable(),
                Select::make('pendidikan_id')
                    ->relationship('pendidikan', 'nama_pendidikan')
                    ->searchable()
                    ->preload()
                    ->createOptionForm([
                        TextInput::make('nama_pendidikan')->required(),
                    ])
                    ->nullable(),

                Select::make('pekerjaan_id')
                    ->label('Pekerjaan')
                    ->relationship('pekerjaan', 'nama_pekerjaan')
                    ->searchable()
                    ->preload()
                    ->createOptionForm([
                        TextInput::make('nama_pekerjaan')->required(),
                    ]),

                TextInput::make('penghasilan_bulanan')->prefix('Rp ')->numeric()->columnSpan(2),
            ])->columns(3);
    }
}
