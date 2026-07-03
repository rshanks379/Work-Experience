<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Position;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $positions = [
            'crew member',
            'customer care',
            'shift manager',
            'general manager',
            'barista'
        ];

        foreach($positions as $position) {
            Position::factory()->create([
                'name' => $position
            ]);
        }
    }
}
