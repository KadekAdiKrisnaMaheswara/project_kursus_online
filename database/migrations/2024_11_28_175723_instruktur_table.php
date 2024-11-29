<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('instruktur', function (Blueprint $table) {
        $table->id('id_instruktur');
        $table->string('nama_instruktur');
        $table->string('bidang_keahlian');
        $table->string('email')->unique();
        $table->string('no_hp')->nullable();
        $table->timestamps(); // created_at & updated_at
    });
}

public function down()
{
    Schema::dropIfExists('instruktur');
}
};
