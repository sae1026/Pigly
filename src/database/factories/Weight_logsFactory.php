<?php

namespace Database\Factories;

use App\Models\Weight_logs;
use Illuminate\Database\Eloquent\Factories\Factory;

class Weight_logsFactory extends Factory
{
    protected $model = Weight_logs::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date'=>$this->faker->dateTime(),
            'pigly_users_id'=>1,
            'weight'=>$this->faker->numberBetween(30,100),
            'calories'=>$this->faker->numberBetween(10,10000),
            'exercise_time'=>$this->faker->time(),
            'exercise_content'=>$this->faker->text(20)
        ];
    }
}
