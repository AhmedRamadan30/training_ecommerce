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
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->double('discount', 8, 2);
            $table->string('discount_type', 10)->comment('fixed or percentage');
            $table->double('max_discount', 8, 2);
            $table->string('type', 5)->comment('(one) time or (many) times');
            $table->string('starts_at');
            $table->string('ends_at');
            $table->boolean('status');
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
        Schema::dropIfExists('coupons');
    }
};
