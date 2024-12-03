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
        Schema::create('sumber_seluruh', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('id_user')->constrained('users');
            $table->foreignId('id_metode_transaksis')->constrained('metode_transaksis');
            $table->decimal('pemasukkan', 15, 2);
            $table->decimal('pengeluaran', 15, 2);
            $table->text('keterangan')->nullable();
            $table->date('tanggal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sumber_seluruh');
    }
};
