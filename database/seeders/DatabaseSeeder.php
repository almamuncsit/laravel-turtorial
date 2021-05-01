<?php

namespace Database\Seeders;

use App\Models\Adjust;
use App\Models\Delivery;
use App\Models\DeliveryDetail;
use App\Models\Item;
use App\Models\Purchase;
use App\Models\PurchaseDetail;
use App\Models\User;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory( 5 )->create();
        Item::factory( 10 )->create();
        Purchase::factory( 5 )->create();
        PurchaseDetail::factory( 15 )->create();
        Delivery::factory( 4 )->create();
        DeliveryDetail::factory( 12 )->create();
        Adjust::factory( 5 )->create();
    }
}
