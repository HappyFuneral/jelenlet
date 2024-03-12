<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttendanceModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => 'Milán'
       ]);
       \App\Models\User::factory()->create([
        'name' => 'Csongor'
    ]);
    \App\Models\User::factory()->create([
    'name' => 'Csaba'
    ]);
    }
}
