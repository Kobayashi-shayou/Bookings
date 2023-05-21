<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
            // 本番環境
            if (config('app.env') === 'production') {
                // $this->call([
                // ]);
    
            } else {
                // テスト環境
                $this->call([
                    UserSeeder::class,
                    AdminSeeder::class,
                ]);
            }
        }
}
