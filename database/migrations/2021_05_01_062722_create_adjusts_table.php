<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateAdjustsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create( 'adjusts', function ( Blueprint $table ) {
            $table->id();
            $table->foreignId( 'item_id' )->constrained( 'items' );
            $table->double( 'plus' )->nullable();
            $table->double( 'minus' )->nullable();
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
        Schema::dropIfExists( 'adjusts' );
    }
}
