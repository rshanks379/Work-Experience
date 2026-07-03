<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Options
        $milkOptions = ['milk' ,'soya' ,'oat' ,'almond' ,'black'];
        $hobbyOptions = ['cars', 'computer games', 'cooking', 'football', 'drinking', 'music'];
        $otherOptions = ['coke' ,'pepsi' ,'fanta' ,'monster' ,'redbull'];

        $gender = fake()->randomElement([0, 1]);
        $hobby = fake()->randomElement($hobbyOptions);
        $teaMilk = fake()->randomElement($milkOptions);
        $coffeeMilk = fake()->randomElement($milkOptions);
        $other = fake()->randomElement($otherOptions);

        $tea = $teaMilk . ", " . rand(0, 10) . " sugar";
        $coffee = $coffeeMilk . ", " . rand(0, 10) . " sugar";
        
        return [
            'name' => $this->faker->name(),
            'gender' => $gender,
            'hobby' => $hobby,
            'dob' => $this->faker->dateTimeBetween('1960-01-01', '2007-12-31')->format('Y-m-d'),
            'tea' => $tea,
            'coffee' => $coffee,
            'other' => $other
        ];
    }
}
