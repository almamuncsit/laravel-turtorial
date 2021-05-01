<?php

namespace Database\Factories;

use App\Models\Adjust;
use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;


class AdjustFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Adjust::class;


    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $arr = [
            'item_id' => Item::all()->random()
        ];

        if( $this->faker->boolean ) {
            $arr['plus']  = $this->faker->numberBetween( 0, 10 );
            $arr['minus'] = 0;
        } else {
            $arr['plus']  = 0;
            $arr['minus'] = $this->faker->numberBetween( 0, 10 );
        }

        return $arr;
    }
}
