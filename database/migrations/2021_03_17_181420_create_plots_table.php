<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plots', function (Blueprint $table) {
            $table->bigInteger('id', true)->unsigned();
            $table->integer('customer_id')->unsigned()->nullable(); 
            $table->integer('agent_id')->unsigned()->nullable();
            $table->integer('p_number')->unsigned(); 
            $table->string('block_number', 191);
            $table->string('p_area', 191);
            $table->string('p_rate', 191);
            $table->integer('total_amont')->unsigned();
            $table->integer('advance_amount_customer')->unsigned()->nullable();
            $table->text('c_method_pay')->nullable();
            $table->text('advance_amount_date')->nullable();
            $table->integer('remaining_amount_customer')->unsigned()->nullable();
            $table->text('remaining_amount_date')->nullable();
            $table->integer('total_commission')->unsigned()->nullable();
            $table->integer('advance_commission')->unsigned()->nullable();
            $table->text('a_method_pay')->nullable();
            $table->text('a_advance_amount_date')->nullable();
            $table->integer('remaining_commission')->unsigned()->nullable();
            $table->text('remaining_commission_date')->nullable();
            $table->string('resold', 191)->nullable();
            $table->text('not_sold')->nullable();
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
        Schema::dropIfExists('plots');
    }
}
