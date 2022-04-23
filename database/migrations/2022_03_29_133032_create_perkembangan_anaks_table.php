<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreatePerkembanganAnaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perkembangan_anak', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('anggota_keluarga_id');
            $table->bigInteger('bidan_id')->nullable();
            $table->text('motorik_kasar');
            $table->text('motorik_halus');
            $table->integer('is_valid')->default(0);
            $table->date('tanggal_validasi')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perkembangan_anak');
    }
}
