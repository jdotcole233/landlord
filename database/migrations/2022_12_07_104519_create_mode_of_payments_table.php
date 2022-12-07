
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
        Schema::create('mode_of_payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tenant_id');
            // $table->foreign('tenant_id')->references('id')->on('tenants')->onDelete('cascade');
            $table->enum('payment_type', ['Mobile money', 'Bank transfer', 'Cash', 'Cheque', 'Direct deposit']);
            $table->json('payment_details')->nullable();
            $table->date('payment_date')->nullable();
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
        Schema::dropIfExists('mode_of_payments');
    }
};
