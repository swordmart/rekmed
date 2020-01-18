<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekmedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekmeds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('dokter');
            $table->string('pasien');
            $table->string('diagnosa');
            $table->date('tanggal');
            $table->string('poli');
            $table->string('resep');
            $table->tinyInteger('stage')->default(1);
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
        Schema::dropIfExists('rekmeds');
    }
}
