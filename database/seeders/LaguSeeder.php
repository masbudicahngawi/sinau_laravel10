<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Lagu;
use App\Models\Genre;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LaguSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lagus = Lagu::all();
        $genres = Genre::all();
        $users = User::all();

        for($i = 1; $i <= 20; $i++){
            Lagu::create([
                'judul' => "Lagu nomor $i",
                'penyanyi' => "Penyanyi ke-$i",
                'genre_id' => $genres->random()->id,
                'deskripsi' => "Description of Lagu ke-$i",
                'user_id' => $users->random()->id,
            ]);
        }

    }
}
