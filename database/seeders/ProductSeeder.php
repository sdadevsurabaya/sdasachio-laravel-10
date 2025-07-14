<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        // Cari kategori "Pneumatic cylinders"
        $category = Category::where('name', 'Pneumatic cylinders')->first();

        if (!$category) {
            $this->command->error('Kategori "Pneumatic cylinders" tidak ditemukan.');
            return;
        }

        // Tambahkan produk DNC Series
        Product::create([
            'name' => 'DNC Series Standard Cylinder (ISO15552)',
            'sku' => 'DNC-STD-ISO15552',
            'category_id' => $category->id,
            'description' => '
                <ul>
                    <li><strong>Motion Pattern:</strong> Double Action</li>
                    <li><strong>Working Medium:</strong> Filtered Air</li>
                    <li><strong>Compression Pressure:</strong> 1.5MPa</li>
                    <li><strong>Max. Operating Pressure:</strong> 1.0MPa</li>
                    <li><strong>Min. Operating Pressure:</strong> 0.1MPa</li>
                    <li><strong>Buffer:</strong> Air Buffer (Standard)</li>
                </ul>
                <p>Produk ini merupakan silinder standar ISO dengan performa tinggi untuk aplikasi industri.</p>
            ',
            'image' => 'products/dnc-series.jpg', // ganti dengan path gambar jika sudah tersedia
        ]);
    }
}

