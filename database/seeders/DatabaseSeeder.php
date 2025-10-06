<?php

namespace Database\Seeders;

use App\Models\Guru;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'tiara',
            'username' => 'tiara123',
            'role' => 'Admin',
            'password' => bcrypt('123456'),
        ]);
        Guru::create([
            'nama_guru' => 'akuy',
            'nip' => '12312',
            'mapel' => '1',
            'foto' => 'oke.jpg',
        ]);

        $this->call([
        User::class,
        Guru::class,
    ]);
    }
}
