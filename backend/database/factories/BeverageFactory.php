<?php

namespace Database\Factories;

use App\Models\Beverage;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Beverage>
 */
class BeverageFactory extends Factory
{
    protected $model = Beverage::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->words(2,true),
            'size'=>fake()->randomFloat(2,0.33,2.5),
            'type'=>fake()->randomElement(["szénsavas","szénsavmentes","energiaital"]),
            'packaging'=>fake()->randomElement(["fém","műanyag","üveg","papír"])
        ];
    }
}
