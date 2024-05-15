<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'nama'           => 'Andre',
            'jabatan'        => 'Sekretariat',
            'phone'          => '123456',
            'alamat'         => 'Denpasar',
            'username'       => 'admin',
            'password'       => Hash::make('password'),
            'hak_akses'      => 'test@example.com',
            'remember_token' => Str::random(10),
        ]);
    }
}
