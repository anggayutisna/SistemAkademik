<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->bigIncrements('id')->FOREIGN_KEY();
            $table->string('nis');
            $table->string('nama_siswa');
            $table->string('slug');
            $table->string('foto')->nullable();
            $table->unsignedBigInteger('kelas_id');
            $table->foreign('kelas_id')->references('id')->on('kelas')->onDelete('CASCADE');
            $table->unsignedBigInteger('jurusan_id');
            $table->foreign('jurusan_id')->references('id')->on('jurusans')->onDelete('CASCADE');
            $table->string('tempat_tinggal');
            $table->date('tanggal_lahir');
            $table->bigInteger('no_telpon');
            $table->unsignedBigInteger('email_id');
            $table->foreign('email_id')->references('id')->on('users')->onDelete('CASCADE');
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
        Schema::dropIfExists('siswas');
    }
}
