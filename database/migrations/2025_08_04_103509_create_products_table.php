<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->text('detail')->nullable();
            $table->text('price_detail')->nullable();
            $table->integer('price')->nullable();
            $table->string('image')->nullable();
            $table->timestamps(); // Let Laravel manage created_at and updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
