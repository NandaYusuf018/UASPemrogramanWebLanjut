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
        Schema::create('detail_sewas', function (Blueprint $table) {
            $table->id('id_detail');
            $table->unsignedBigInteger('id_sewa');
            $table->unsignedBigInteger('id_alat');
            $table->integer('jumlah');
            $table->decimal('subtotal', 12, 2);
            $table->timestamps();

            $table->foreign('id_sewa')->references('id_sewa')->on('penyewaans')->onDelete('cascade');
            $table->foreign('id_alat')->references('id_alat')->on('alats')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_sewas');
    }
};
