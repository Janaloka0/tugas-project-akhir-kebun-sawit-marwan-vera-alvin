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
        Schema::create('produksi', function (Blueprint $table) {
            $table->id();
            // $table->foreigid('kebun_id')->constrained('kebun')->onDelete('cascade');
            $table->integer('kebun_id');
            $table->integer('jumlah_tandan');
            $table->integer('berat_total');
            $table->date('tanggal_panen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produksi');
    }
};
