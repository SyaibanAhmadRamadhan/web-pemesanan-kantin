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
        Schema::create('penjual', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_penjual')->constrained('users')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->string('nama');
            $table->string('nama_warung');
            $table->string('lokasi');
            $table->string('nomer_telepon');
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
        Schema::dropIfExists('penjual');
    }
};
