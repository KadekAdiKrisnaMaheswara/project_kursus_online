<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('kursus', function (Blueprint $table) {
            $table->id('id_kursus');
            $table->string('judul_kursus');
            $table->text('deskripsi_kursus');
            $table->foreignId('id_instruktur')->onDelete('cascade');
            $table->decimal('harga', 10, 2);
            $table->integer('durasi'); // Durasi dalam jam
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('kursus');
    }    
};
