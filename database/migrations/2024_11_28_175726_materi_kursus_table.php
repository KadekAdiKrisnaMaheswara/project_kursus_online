<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('materi_kursus', function (Blueprint $table) {
            $table->id('id_materi');
            $table->string('judul_materi');
            $table->foreignId('id_kursus')->onDelete('cascade');
            $table->text('deskripsi_materi')->nullable();
            $table->string('file_materi')->nullable(); // Path file materi
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('materi_kursus');
    }    
};
