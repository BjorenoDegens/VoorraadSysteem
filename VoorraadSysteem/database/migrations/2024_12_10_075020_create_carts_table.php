<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id(); // Primaire sleutel
            $table->unsignedBigInteger('user_id')->nullable(); // Optioneel: voor gebruiker ID (indien gebruikers zijn gekoppeld)
            $table->unsignedBigInteger('product_id'); // Verwijzing naar producten
            $table->integer('quantity')->default(1); // Hoeveelheid van het product
            $table->integer('loan_period')->default(7); // Leentijd in dagen
            $table->date('return_date')->nullable(); // Datum waarop het product moet worden teruggebracht
            $table->timestamps(); // Voor 'created_at' en 'updated_at'

            // Optionele relaties
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
};
