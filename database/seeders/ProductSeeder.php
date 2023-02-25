<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('product')->insert(
            [
                'name' => 'Laptop',
                'price' => '40,000',
                'description' => 'very attractive features',
                'category' => 'laptop',
                'gallery' => 'https://www.google.com/search?q=laptop+imges&rlz=1C1CHWL_enIN1044IN1044&oq=laptop+imges&aqs=chrome..69i57.3881j0j7&sourceid=chrome&ie=UTF-8#imgrc=K66ullCEQCWUmM'
            ,
                'name' => 'Bottle',
                'price' => '2000',
                'description' => 'very attrative water bottle',
                'category' => 'Water Bottle',
                'gallery' => 'https://www.pexels.com/photo/vacuum-flask-on-brown-wooden-dock-1188649/'
            ]
        );
    }
}
