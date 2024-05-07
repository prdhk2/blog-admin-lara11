<?php

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        // Contoh data produk
        $products = [
            [
                'name' => 'Peace Lily',
                'category' => 'Indoor',
                'price' => '1',
                'image' => 'https://user-images.githubusercontent.com/2805249/64069899-8bdaa180-cc97-11e9-9b19-1a9e1a254c18.png'
            ],
            [
                'name' => 'Snake Plant',
                'category' => 'Indoor',
                'price' => '2',
                'image' => 'https://example.com/snake_plant.jpg'
            ],
            // Tambahkan data produk lainnya sesuai kebutuhan
        ];

        // Simpan data produk ke dalam database
        foreach ($products as $productData) {
            Product::create($productData);
        }
    }
}

