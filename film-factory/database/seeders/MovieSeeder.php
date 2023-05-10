<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Movie;
use Carbon\Carbon;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movies = [
        [
            'title' => 'Flash',
            'cinema' => 'Sterland',
            'code' => 'fls',
            'release_date' => Carbon::parse('2022-01-01'),
            'img_url' => '/images/flash.jpg'
        ],
        [
            'title' => 'The Super Mario Bros. Movie',
            'cinema' => 'Sterland',
            'code' => 'smb',
            'release_date' => Carbon::parse('2021-01-01'),
            'img_url' => '/images/supermario.jpg'
        ],
        [
            'title' => 'The Little Mermaid',
            'cinema' => 'Wonderpark',
            'code' => 'tlm',
            'release_date' => Carbon::parse('2021-01-01'),
            'img_url' => '/images/mermaid.jpg'
        ],
        [
            'title' => 'Scream',
            'cinema' => 'Wonderpark',
            'code' => 'scm',
            'release_date' => Carbon::parse('1999-01-01'),
            'img_url' => '/images/scream.jpg'
        ],
        [
            'title' => 'Puss In Boots',
            'cinema' => 'Blue Route',
            'code' => 'pib',
            'release_date' => Carbon::parse('1990-01-01'),
            'img_url' => '/images/puss.jpg'
        ],
        [
            'title' => 'Ant Man',
            'cinema' => 'Blue Route',
            'code' => 'anm',
            'release_date' => Carbon::parse('1899-01-01'),
            'img_url' => '/images/antman.jpg'
        ],
        [
            'title' => 'Joker',
            'cinema' => 'Cavendish',
            'code' => 'jkr',
            'release_date' => Carbon::parse('2030-01-01'),
            'img_url' => '/images/joker.jpg'
        ],
        [
            'title' => 'Dungeons & Dragons',
            'cinema' => 'Cavendish',
            'code' => 'dad',
            'release_date' => Carbon::parse('2000-01-01'),
            'img_url' => '/images/dungeons.jpg'
        ]
        ];

        Movie::insert($movies);
    }
}
