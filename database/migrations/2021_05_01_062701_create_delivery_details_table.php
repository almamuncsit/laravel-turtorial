<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateDeliveryDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create( 'delivery_details', function ( Blueprint $table ) {
            $table->id();
            $table->foreignId( 'delivery_id' )->constrained( 'deliveries' );
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
        Schema::dropIfExists( 'delivery_details' );
    }
}
