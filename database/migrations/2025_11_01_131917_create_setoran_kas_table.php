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
        Schema::create('setoran_kas', function (Blueprint $table) {
            $table->increments('id_pembayaran')->primary();
            $table->double('jumlah_bayar');
            $table->text('keterangan')->nullable();
            $table->string('periode', 255);
            $table->date('tanggal_bayar');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('setoran_kas');
    }
};
