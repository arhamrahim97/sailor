<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeteksiIbuMelahirkanStuntingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deteksi_ibu_melahirkan_stunting', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('anggota_keluarga_id');
            $table->uuid('bidan_id')->nullable();
            $table->string('kategori');
            $table->integer('is_valid')->default(0);
            $table->date('tanggal_validasi')->nullable();
            $table->text('alasan_ditolak')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deteksi_ibu_melahirkan_stunting');
    }
}
