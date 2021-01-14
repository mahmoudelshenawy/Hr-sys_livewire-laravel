<?php

namespace Database\Factories;

use App\Models\Administration;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdministrationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Administration::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code' => $this->faker->randomNumber,
            'name' => $this->faker->name,
            'branch_id' => $this->faker->randomDigitNotNull
        ];
    }
}
