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
        Schema::create('keranjangs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_produk');
            $table->unsignedBigInteger('id_pelanggan');
            $table->integer('qty');
            $table->string('ukurandipesan');
            $table->boolean('has_bought');
            $table->foreign('id_produk')->references('id')->on('produk')->onDelete('cascade');
            $table->foreign('id_pelanggan')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::table('keranjangs', function (Blueprint $table) {
        //     // Hapus foreign key constraint sebelum menghapus tabel
        //     $table->dropForeign(['user_id']);
        // });
        Schema::dropIfExists('keranjangs');
    }
};
