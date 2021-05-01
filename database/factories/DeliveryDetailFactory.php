<?php

namespace Database\Factories;

use App\Models\Delivery;
use App\Models\DeliveryDetail;
use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;


class DeliveryDetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DeliveryDetail::class;


    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'delivery_id' => Delivery::all()->random(),
            'item_id'     => Item::all()->random(),
            'quantity'    => $this->faker->numberBetween( 0, 10 )
        ];
    }
}
