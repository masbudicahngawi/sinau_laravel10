<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = ['admin', 'bronze', 'silver', 'gold', 'platinum'];

        DB::table('users')->insert([
            'name' => 'Ngademin',
            'password' => Bcrypt("admin"),
            'role' => 'admin'
        ]);

        DB::table('users')->insert([
            'name' => 'Ambar Susilo Jati',
            'password' => Bcrypt("123"),
            'role' => $roles[rand(1,4)]
        ]);

        DB::table('users')->insert([
            'name' => 'Bondan Jayanto',
            'password' => Bcrypt("123"),
            'role' => $roles[rand(1, 4)]
        ]);

        DB::table('users')->insert([
            'name' => 'Chika Istiviana',
            'password' => Bcrypt("123"),
            'role' => $roles[rand(1, 4)]
        ]);

        DB::table('users')->insert([
            'name' => 'Dinda Anitasari',
            'password' => Bcrypt("123"),
            'role' => $roles[rand(1, 4)]
        ]);

        DB::table('users')->insert([
            'name' => 'Enno Febriani',
            'password' => Bcrypt("123"),
            'role' => $roles[rand(1, 4)]
        ]);

    }
}