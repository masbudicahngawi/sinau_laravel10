<?php

namespace Database\Seeders;
use App\Models\Genre;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genres = ['Pop', 'Dangdut', 'Rock', 'Keroncong', 'Lainnya'];

        for ($i=0; $i < count($genres); $i++){
            Genre::create([
                'nama' => $genres[$i]
            ]);

        }
    }
}
