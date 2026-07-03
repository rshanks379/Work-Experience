<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
      
        $max = 9;
        for ($i = 1; $i <= $max; $i++) {
            $employee = Employee::factory()->create();
        }
    }
}
