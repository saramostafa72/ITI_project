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
        //
        Product::factory()->create([
            'name'=>'Dress',
            'price'=>400,
           // 'image' =>'https://media.istockphoto.com/id/1217970962/photo/elegance-peach-vintage-dress-isolated-on-white-background.jpg?s=612x612&w=0&k=20&c=Uht6bRtoSLHgt2v7FUgwb6vrGTkn7XIa85MuQXjuzSE=',
            'category_id'=>1
        ]);
        Product::factory()->create([
            'name'=>'Blouse',
            'price'=>100,
            //'image'=>'https://f.nooncdn.com/p/pzsku/Z4B785D15159C422B3CAAZ/45/_/1686916757/78052fd5-957b-4d8c-aa37-23803d707ffe.jpg?format=avif&width=800',
            'category_id'=>1
        ]);
        Product::factory()->create([
            'name'=>'Skirt',
            'price'=>200,
            //'image'=>'https://eg.jumia.is/unsafe/fit-in/680x680/filters:fill(white)/product/66/175313/1.jpg?6339',
            'category_id'=>1
        ]);
        Product::factory()->create([
            'name'=>'Trouser',
            'price'=>150,
            //'image'=>'https://eg.hm.com/assets/styles/HNM/16924309/f55dbf370713cdefe12e90db581c4c217f9ccafb/2/image-thumb__5000473__product_listing/15a49d0ac0afa2d883c218d45563eec1d657d800.jpg',
            'category_id'=>1
        ]);
        Product::factory()->create([
            'name'=>'Shirt',
            'price'=>100,
            //'image'=>'https://img.freepik.com/premium-psd/realistic-woman-t-shirt-mockup-3d-t-shirt-mockup_669874-1110.jpg?w=740',
            'category_id'=>1
        ]);
        Product::factory()->create([
            'name'=>'T_Shirt',
            'price'=>100,
            //'image'=>'https://fullyfilmy.in/cdn/shop/products/New-Mockups---no-hanger---TShirt-Yellow.jpg?v=1639657077',
            'category_id'=>2
        ]);
        Product::factory()->create([
            'name'=>'Jeans',
            'price'=>200,
            //'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQjIRFppLf-8e-9JCl30Hy4I-FEbRUolPBL1g&usqp=CAU',
            'category_id'=>2
        ]);
        Product::factory()->create([
            'name'=>'Suit',
            'price'=>500,
            //'image'=>'https://happygentleman.com/wp-content/uploads/2022/08/Madrid_suit_Navy-3-picece-suit-for-men-happy-gentleman-5-400x400.webp',
            'category_id'=>2
        ]);
        Product::factory()->create([
            'name'=>'Waistcoat',
            'price'=>200,
           // 'image'=>'https://images.comelin.com/110/25070/w720/HUGE-WAISTCOAT-40-Black-BOSS-COLLECTION-M2-Boutiques.webp',
            'category_id'=>2
        ]);
        Product::factory()->create([
            'name'=>'Blazer',
            'price'=>300,
            //'image'=>'https://media.istockphoto.com/id/1152838910/photo/male-dark-blue-blazer-on-isolated-background.jpg?s=612x612&w=0&k=20&c=B-hs6BnK3YMGEqZcoV1MLZ6mPf3HJMHABui0ZwUaKhU=',
            'category_id'=>2
        ]);
        Product::factory()->create([
            'name'=>'T_shirt',
            'price'=>100,
            //'image'=>'https://images-platform.99static.com//1ttyCCvOO18CzCAnEEtuGw1KeGs=/0x134:960x1094/fit-in/590x590/projects-files/43/4363/436368/7b63bff6-f038-4d77-90a5-05ed82376382.jpg',
            'category_id'=>3
        ]);
        Product::factory()->create([
            'name'=>'Pants',
            'price'=>200,
            //'image'=>'https://s7d1.scene7.com/is/image/zumiez/364634',
            'category_id'=>3
        ]);
        Product::factory()->create([
            'name'=>'Jumpsuit',
            'price'=>200,
            //'image'=>'https://sslimages.shoppersstop.com/sys-master/images/ha9/h60/16744529526814/A20PPM0311582RE_RED.jpg_230Wx334H',
            'category_id'=>3
        ]);
        Product::factory()->create([
            'name'=>'Dress',
            'price'=>300,
           // 'image'=>'https://img.fruugo.com/product/4/11/467958114_max.jpg',
            'category_id'=>3
        ]);
    }
}
