<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMataPelajaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mata_pelajarans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('mata_pelajaran');
            $table->timestamps();
        });

        Schema::create('guru_matapelajaran', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('guru_id');
            $table->unsignedBigInteger('matapelajaran_id');
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
        Schema::dropIfExists('mata_pelajarans');
        Schema::dropIfExists('guru_matapelajaran');
    }
}
