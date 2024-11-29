<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('enroll', function (Blueprint $table) {
            $table->id('id_enroll');
            $table->foreignId('id_kursus')->onDelete('cascade');
            $table->foreignId('id_peserta')->onDelete('cascade');
            $table->date('tanggal_enroll');
            $table->enum('status_pembayaran', ['pending', 'completed', 'failed'])->default('pending');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('enroll');
    }    
};
