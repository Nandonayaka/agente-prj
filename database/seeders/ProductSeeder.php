<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert([
            [
                'name_product' => 'Laptop Asus',
                'harga' => 10000000,
                'deskripsi_product' => 'Laptop untuk kerja',
                'kategori_id' => 1,
            ],
            [
                'name_product' => 'Mouse Logitech',
                'harga' => 200000,
                'deskripsi_product' => 'Mouse gaming',
                'kategori_id' => 1,
            ],
            [
                'name_product' => 'Keyboard Mechanical',
                'harga' => 500000,
                'deskripsi_product' => 'Keyboard RGB',
                'kategori_id' => 1,
            ],
        ]);
    }
}
