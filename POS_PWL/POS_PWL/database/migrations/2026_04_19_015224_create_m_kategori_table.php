<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('m_kategori', function (Blueprint $table) {
            $table->id('kategori_id'); // bigint unsigned, primary key
            $table->string('kategori_kode', 10); // varchar(10)
            $table->string('kategori_nama', 100); // varchar(100)
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('m_kategori', function (Blueprint $table) {
            
        });
    }
};
