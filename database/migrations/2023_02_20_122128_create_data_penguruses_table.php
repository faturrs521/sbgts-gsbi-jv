<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPengurusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_penguruses', function (Blueprint $table) {
            $table->id();
            $table->integer('nik')->unique();
            $table->string('nama');
            $table->enum('jeniskelamin', ['pria', 'wanita']);
            $table->string('jabatan');
            $table->string('dept');
            $table->string('foto');
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
        Schema::dropIfExists('data_penguruses');
    }
}
