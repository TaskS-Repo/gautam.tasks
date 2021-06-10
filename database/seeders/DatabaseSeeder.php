<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\StudentSeeder;
use Database\Seeders\TeacherSeeder;
use Database\Seeders\ParentModelSeeder;
use Database\Seeders\CourseSeeder;
use Database\Seeders\MedicineSeeder;
use Database\Seeders\programmeeSeeder;


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
        $this->call(StudentSeeder::class);
        $this->call(TeacherSeeder::class);
        $this->call(ParentModelSeeder::class);
        $this->call(programmeeSeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(MedicineSeeder::class);

    }
}
