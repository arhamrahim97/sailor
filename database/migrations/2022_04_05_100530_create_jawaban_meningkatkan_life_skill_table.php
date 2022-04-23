<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawabanMeningkatkanLifeSkillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban_meningkatkan_life_skill', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('randa_kabilasa_id');
            $table->bigInteger('soal_id');
            $table->string('jawaban');
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
        Schema::dropIfExists('jawaban_meningkatkan_life_skill');
    }
}
