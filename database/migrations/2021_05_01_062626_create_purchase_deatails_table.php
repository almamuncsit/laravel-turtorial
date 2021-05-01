<?php

use App\Models\PurchaseDetail;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreatePurchaseDeatailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create( ( new PurchaseDetail() )->getTable(), function ( Blueprint $table ) {
            $table->id();
            $table->foreignId( 'purchase_id' )->constrained( 'purchases' );
            $table->foreignId( 'item_id' )->constrained( 'items' );
            $table->double( 'quantity' );
            $table->timestamps();
        } );
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists( ( new PurchaseDetail() )->getTable() );
    }
}
