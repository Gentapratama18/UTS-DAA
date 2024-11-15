<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('beasiswa', function (Blueprint $table) {
            $table->id(); 
            $table->string('nama', 255); 
            $table->enum('jenis', ['full', 'parsial', 'lainnya'])->default('lainnya'); 
            $table->decimal('nominal', 15, 2)->nullable(); 
            $table->text('deskripsi')->nullable(); 
            $table->date('tanggal_calon_beasiswa_daftar'); 
            $table->enum('jurusan',['Teknik-Informatika','Teknik-Sipil','Teknik-Mesin','Teknik-Elektro','Teknik-Kimia','Teknik-Industri']);
            $table->boolean('status')->default(true); 
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beasiswas');
    }
};
