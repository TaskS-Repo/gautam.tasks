<?php

namespace Database\Factories;

use App\Models\Programmes;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProgrammesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Programmes::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name,
            'total_course'=>random_int(30,50),
            'student_id'=>random_int(1,100),
            'fee'=>random_int(10000,70000)
        ];
    }
}
