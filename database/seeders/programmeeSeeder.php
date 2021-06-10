<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Programmes;

class programmeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Programmes::factory()->times(100)->create();
    }
}
