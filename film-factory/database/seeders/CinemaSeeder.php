<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Cinema;

class CinemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cinemas = [[
            'name' => 'Sterland',
            'region' => 'Gauteng',
            'seats' => 30,
        ],
        [
            'name' => 'Wonderpark',
            'region' => 'Gauteng',
            'seats' => 30,
        ],
        [
            'name' => 'Blue Route',
            'region' => 'Western Cape',
            'seats' => 30,
        ],
        [
            'name' => 'Cavendish',
            'region' => 'Western Cape',
            'seats' => 30,
        ]];

        Cinema::insert($cinemas);
    }
}
