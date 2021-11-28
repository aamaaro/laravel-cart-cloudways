<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {{
        $products = [
            [
                'name' => 'Apple Macbook Pro 16',
                'details' => 'Apple M1 Pro, 16 GPU, 16 GB, 512 GB SSD',
                'description' => 'Chip M1 Pro de Apple CPU de 10 núcleos con 8 núcleos de rendimiento y 2 de eficiencia
                GPU de 16 núcleos Neural Engine de 16 núcleos 200 GB/s de ancho de banda de memoria Motor multimedia
                H.264, HEVC, ProRes y ProRes RAW con aceleración por hardware Motor de decodificación de video',
                'brand' => 'Apple',
                'price' => 2499,
                'shipping_cost' => 25,
                'image_path' => 'storage/product1.png',
            ],
            [
                'name' => 'Samsung Galaxy Book Pro',
                'details' => '13.3 inch, 8GB, DDR4 SDRAM, 256GB',
                'description' => 'Los nuevos modelos destacan especialmente por su delgadez, sobre todo en el caso del modelo de 13,3 pulgadas, que cuenta con un grosor de tan solo 11,2 mm. Integran además procesadores Intel Core de 11ª generación y aunque llegan con Windows 10 Pro están preparados para ser actualizados a Windows 11 Pro.',
                'brand' => 'Samsung',
                'price' => 300,
                'shipping_cost' => 23,
                'image_path' => 'storage/product2.png',
            ],
        ];
        foreach ($products as $key => $value) {
            Product::create($value);
    }

    }
}
}