<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->text(10),
            'code'=>random_int(1,100),
            'duration'=>random_int(1,10),
            'fee'=>random_int(1,10000),
            'description'=>$this->faker->text(200),
            'student_id'=>random_int(1,100),
            'programe_id'=>random_int(1,100),
        ];
    }
}
