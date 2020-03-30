<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatakuliahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matakuliahs', function (Blueprint $table) {
            $table->id();
            $table->string('kode_mata_kuliah')->unique();
            $table->string('mata_kuliah')->unique();
            $table->string('singkatan')->unique();
            $table->integer('id_programstudi');
            $table->enum('semester',['1','2','3','4','5','6','7','8']);
            $table->integer('status');
            $table->timestamps();
            // $table->foreign('id_programstudi')->references('id')->on('programstudis');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matakuliahs');
    }
}
