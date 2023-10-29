<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SubcategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
       public function run()
    {
        $subcategories = [
            'Silk Screen Printing',
            'Embroidery',
            'Packaging',
            'Mylar Bags',
            'Glass Jars',
            'Labels/Stickers',
            'Equipment',
            'Portfolio',
        ];

        foreach ($subcategories as $subcategory) {
            DB::table('subcategories')->insert([
                'name' => $subcategory,
            ]);
        }
    }
}
