<?php

namespace Database\Factories;

use App\Models\Medicine;
use Illuminate\Database\Eloquent\Factories\Factory;

class MedicineFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Medicine::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'name'=>$this->faker->text(10),
            'price'=>random_int(1,5000),
            'quantity'=>random_int(1,200),
            'image'=>$this->faker->text(15),
            'catogery'=>$this->faker->text(5),
            'no_of_items'=>random_int(1,100)
        ];
    }
}
