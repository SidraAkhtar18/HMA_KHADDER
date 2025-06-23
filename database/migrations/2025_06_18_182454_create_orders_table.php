<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
{
    Schema::create('orders', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->text('address');
        $table->json('cart_items'); // 👈 this MUST be json or longText
        $table->integer('total');   // 👈 must be integer
        $table->timestamps();
    });
}
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
