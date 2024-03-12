<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        \App\Models\User::factory()->create([
            'name' => 'dev_milan',
            'email' => 'maroevich.milan@temetkezes.hu',
            'role_id' => 2
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Csongor',
            'email' => 'miko.csongor@temetkezes.hu',
            'role_id' => 2
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Csaba',
            'email' => 'kavarnyik.csaba@temetkezes.hu',
            'role_id' => 2
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Karesz',
            'email' => 'karesz@temetkezes.hu',
            'role_id' => 1
        ]);        

        $this->call(
            [
                RoleSeeder::class
            ]
        );

    }
}
