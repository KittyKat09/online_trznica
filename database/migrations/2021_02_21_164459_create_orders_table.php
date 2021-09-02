<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->unsignedBigInteger('user_id');
            $table->string('phone');
            $table->string('address');
            $table->string('postcode');
            $table->string('city');
            $table->enum('county', ['Primorsko-goranska', 'Istarska', 'Ličko-senjska'])->default('Primorsko-goranska');
            $table->string('content');
            $table->string('notes')->nullable();

            $table->enum('status', ['processing', 'sent', 'delivered'])->default('processing');
            $table->float('total');
            $table->boolean('paid')->default(false);

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
