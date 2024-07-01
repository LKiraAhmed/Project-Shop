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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->binary('image')->nullable();
            $table->decimal('price', 8, 2);
            $table->decimal('discount', 10, 2)->default(0);
            $table->text('description')->nullable();
            $table->string('size');
            $table->integer('quantity')->default(0);
            $table->unsignedBigInteger('catigorie_id');
            $table->foreign('catigorie_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
