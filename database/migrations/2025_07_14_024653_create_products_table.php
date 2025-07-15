<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->nullable()->constrained('categories')->onDelete('set null');
            $table->foreignId('parent_id')->nullable()->constrained('products')->onDelete('cascade'); // subproduk
            $table->string('name');
            $table->string('sku')->nullable(); // kode produk opsional
            $table->json('features')->nullable(); // disimpan dalam bentuk key-value json
            $table->string('download_url')->nullable(); // url file download
            $table->text('description')->nullable();
            $table->string('image')->nullable(); // path gambar produk
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
