<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalerecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Salerecords', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('medicine_id')->unsigned();
            $table->integer('quantity');
            $table->integer('total_price');
            $table->timestamps();


            $table->foreign('medicine_id')
                    ->references('id')
                    ->on('medicines');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Salerecord');
    }
}
