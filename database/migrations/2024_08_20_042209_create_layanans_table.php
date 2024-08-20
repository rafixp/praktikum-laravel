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
        Schema::create('layanans', function (Blueprint $table) {
            $table->id();
            $table->string('kode_pemesanan');
            $table->string('nama_pengguna');
            $table->enum('jk', array('Laki-Laki','Perempuan'));
            $table->date('tgl_pemesanan'); 
            $table->enum('jenis_cucian',array('Reguler','Ekspress'));
            $table->integer('qty');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('layanans');
    }
};
