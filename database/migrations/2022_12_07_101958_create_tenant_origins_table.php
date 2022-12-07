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
        Schema::create('tenant_origins', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tenant_id');
            // $table->foreign('tenant_id')->references('id')->on('tenants')->onDelete('cascade');
            $table->string('citizenship', 100)->nullable();
            $table->string('id_number', 100);
            $table->string('country', 100)->default('Ghana');
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
        Schema::dropIfExists('tenant_origins');
    }
};
