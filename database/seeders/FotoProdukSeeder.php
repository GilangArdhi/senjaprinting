<?php

namespace Database\Seeders;

use App\Models\FotoProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FotoProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product = [
            [
                'fotoProduk' => 'IMG_20230408_155332.jpg',
                'id_produk' => '1'
            ],
            [
                'fotoProduk' => 'IMG_20230408_154732.jpg',
                'id_produk' => '1'
            ],
            [
                'fotoProduk' => 'IMG_20230408_155031.jpg',
                'id_produk' => '1'
            ],
            [
                'fotoProduk' => '1673574507027.jpg',
                'id_produk' => '2'
            ],
            [
                'fotoProduk' => '1673573379751.jpg',
                'id_produk' => '2'
            ],
            [
                'fotoProduk' => '1683669059331.jpg',
                'id_produk' => '2'
            ],
        ];

        foreach ($product as $produk) {
            FotoProduct::create($produk);
        }
    }
}
