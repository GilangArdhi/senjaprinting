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
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_produk');
            $table->string('order_id');
            $table->unsignedBigInteger('id_pelanggan');
            $table->string('nama');
            $table->string('email');
            $table->string('noHp');
            $table->integer('qty');
            $table->string('alamat');
            $table->string('kota');
            $table->integer('kdPos');
            $table->decimal('amount');
            $table->string('status');
            $table->string('snap_token');
            $table->foreign('id_pelanggan')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donations');
    }
};
