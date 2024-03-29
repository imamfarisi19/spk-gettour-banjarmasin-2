<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kriteria_khususes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tempat_wisata_id');
            $table->double('kriteriaKhusus1');
            $table->double('kriteriaKhusus2');
            $table->double('kriteriaKhusus3');
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
        Schema::dropIfExists('kriteria_khususes');
    }
};
