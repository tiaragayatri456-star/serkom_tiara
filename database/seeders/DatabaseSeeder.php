<?php

namespace Database\Seeders;

use App\Models\Guru;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use League\Uri\UriTemplate\Operator;

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
            'name' => 'operator',
            'username' => 'operator123',
            'role' => 'Operator',
            'password' => bcrypt('123456'),

        ]);

        $this->call([
        User::class,
        Guru::class,
    ]);
    }
}
