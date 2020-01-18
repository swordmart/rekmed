<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableRekmeds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rekmeds', function (Blueprint $table) {
            $table->string('dokter')->nullable()->change();
            $table->string('diagnosa')->nullable()->change();
            $table->string('poli')->nullable()->change();
            $table->string('resep')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rekmeds', function (Blueprint $table) {
            $table->string('dokter')->nullable(false)->change();
            $table->string('diagnosa')->nullable(false)->change();
            $table->string('poli')->nullable(false)->change();
            $table->string('resep')->nullable(false)->change();
        });
    }
}
