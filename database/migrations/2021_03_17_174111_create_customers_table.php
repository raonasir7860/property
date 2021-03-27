<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigInteger('id', true)->unsigned();
            $table->string('full_name', 191);
            $table->string('phone_number', 191);
            $table->string('card_number', 191)->nullable();
            $table->string('email', 191);
            $table->string('city', 191);
            $table->string('area', 191);
            $table->string('address', 191);
            $table->text('details')->nullable();
            $table->string('image', 191)->nullable();
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
        Schema::dropIfExists('customers');
    }
}
