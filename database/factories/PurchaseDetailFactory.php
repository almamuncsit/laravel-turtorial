<?php

namespace Database\Factories;

use App\Models\Item;
use App\Models\Purchase;
use App\Models\PurchaseDetail;
use Illuminate\Database\Eloquent\Factories\Factory;


class PurchaseDetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PurchaseDetail::class;


    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'purchase_id' => Purchase::all()->random(),
            'item_id'     => Item::all()->random(),
            'quantity'    => $this->faker->numberBetween( 0, 10 )
        ];
    }
}
