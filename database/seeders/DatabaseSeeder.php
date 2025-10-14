<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seeder User bawaan
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // ✅ Tambahkan pemanggilan seeder lain di sini
        $this->call([
            PeminjamanSeeder::class,
        ]);
    }
}
