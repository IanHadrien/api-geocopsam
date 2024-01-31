<?php

namespace Database\Seeders;

use App\Models\Cultivation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CultivationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cultivation::factory(5)->create();
    }
}
