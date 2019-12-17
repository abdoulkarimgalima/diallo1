<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTradersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('traders', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string ('firstname_Trader');
            $table->string ('name_Trader');
            $table->integer ('NUMTEL');
            $table->string ('Address');
            $table->string ('Password');
            $table->string ('Productname');
            $table->integer('Quantity');
            $table->string ('Product_benefits');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('traders');
    }
}
