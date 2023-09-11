<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Category::factory()->create([
            'name' => 'Women',
            //'image' => 'https://www.color-meanings.com/wp-content/uploads/female-clothes-stylist-workplace.jpeg'
        ]);
        Category::factory()->create([
            'name' => 'Men',
            //'image' => 'https://img.freepik.com/free-photo/young-handsome-man-choosing-clothes-shop_1303-19720.jpg'

        ]);
        Category::factory()->create([
            'name' => 'Kids',
            //'image' => 'https://media.timeout.com/images/105945067/750/422/image.jpg'
        ]);
    }
}
