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
        Schema::create('detail_pesanans', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_kendaraan');
            $table->unsignedBigInteger('layanan_id');
            $table->unsignedBigInteger('user_id');
            $table->string('nomer_plat');
            $table->string('status');
            $table->timestamps();

            $table->foreign('layanan_id')->references('id')->on('layanans');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_pesanan');
    }
};
