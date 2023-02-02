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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('address_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('coupon_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->double('sub_total', 8, 2);
            $table->double('discount', 8, 2);
            $table->double('total', 8, 2);
            $table->string('payments_type', 50)->comment('online, cod');
            $table->string('payment_method', 50)->comment('visa/mastercard OR e_waller OR cod');
            $table->string('payment_status', 50)->comment('failed OR pending OR done');
            $table->string('order_status', 50)->comment('cancelled OR pending OR delivered');
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
        Schema::dropIfExists('orders');
    }
};
