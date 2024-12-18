<?php

namespace Database\Seeders;

use App\Models\Employers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Employers::factory()->count(10)->create();
    }
}
