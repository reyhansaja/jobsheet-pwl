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
        Schema::table('m_supplier', function (Blueprint $table) {
            $table->id('supplier_id'); // primary key
            $table->string('supplier_kode')->unique(); // kode unik supplier
            $table->string('supplier_nama'); // nama supplier
            $table->text('supplier_alamat')->nullable(); // alamat
            $table->string('supplier_telp', 20)->nullable(); // nomor telepon
            $table->string('supplier_email')->nullable(); // email
            $table->timestamps(); // created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('m_supplier', function (Blueprint $table) {
            //
        });
    }
};
