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
        Schema::create('tenants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('room_id');
            // $table->foreign('room_id')->references('id')->on('rooms')->onDelete('cascade');
            $table->string('first_name', 50);
            $table->string('other_name', 50)->nullable();
            $table->string('last_name', 50);
            $table->string('email', 60)->nullable();
            $table->string('phone_number', 15);
            $table->decimal('monthly_rent', 8, 2);
            $table->date('duration_from')->nullable();
            $table->date('duration_to')->nullable();
            $table->integer('number_of_occupants')->default(1);
            $table->decimal('total_rent', 10, 2);
            $table->string('currency')->default('GHS');
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
        Schema::dropIfExists('tenants');
    }
};
