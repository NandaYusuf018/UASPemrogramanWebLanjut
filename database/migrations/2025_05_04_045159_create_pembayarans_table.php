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
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id('id_pembayaran');
            $table->unsignedBigInteger('id_sewa');
            $table->datetime('tanggal_bayar');
            $table->decimal('jumlah_bayar', 12, 2);
            $table->string('metode_bayar');
            $table->text('catatan')->nullable();
            $table->timestamps();

        $table->foreign('id_sewa')->references('id_sewa')->on('penyewaans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembayarans');
    }
};
