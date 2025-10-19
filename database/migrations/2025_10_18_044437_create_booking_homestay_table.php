<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('booking_homestay', function (Blueprint $table) {
            $table->increments('booking_id');
            $table->foreignId('kamar_id');
            $table->foreignId('warga_id')->constrained('warga')->onDelete('cascade');
            $table->date('checkin');
            $table->date('checkout');
            $table->decimal('total', 10, 2);
            $table->string('status')->default('pending');
            $table->string('metode_bayar');
            $table->string('bukti_pembayaran')->nullable(); // untuk file bukti
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking_homestay');
    }
};
