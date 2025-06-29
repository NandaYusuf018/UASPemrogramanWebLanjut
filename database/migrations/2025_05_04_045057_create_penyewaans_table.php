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
        Schema::create('penyewaans', function (Blueprint $table) {
            $table->id('id_sewa');
            $table->unsignedBigInteger('id_pelanggan');
            $table->date('tanggal_sewa');
            $table->date('tanggal_kembali');
            $table->enum('status', ['berjalan', 'dikembalikan', 'terlambat']);
            $table->decimal('total_harga', 12, 2);
            $table->timestamps();

            $table->foreign('id_pelanggan')->references('id_pelanggan')->on('customers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penyewaans');
    }
};
