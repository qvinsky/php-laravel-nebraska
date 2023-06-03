<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NebraskaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
            for ($i = 0; $i < 20; $i++) {

                DB::table('nebraskas')->insert([
                    'title' => fake()->title(),
                    'description' => fake()->paragraph(2, true),
                    'category' => fake()->sentence()
                ]);
            }
        }
}
