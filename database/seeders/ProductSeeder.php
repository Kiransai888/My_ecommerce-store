<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([

            [
            'name'=>'Lg mobile',
            'price'=>'200',
            'description'=>'this is the mobile description',
            'category'=>'mobile',
            'gallery'=>'https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/iphone-14-pro-model-unselect-gallery-1-202209?wid=5120&hei=2880&fmt=p-jpg&qlt=80&.v=1660753619946'
            ],
            [
                'name'=>'oppo mobile',
                'price'=>'300',
                'description'=>'this is the mobile description',
                'category'=>'mobile',
                'gallery'=>'https://image.oppo.com/content/dam/oppo/in/mkt/phonelist/products/find-x2-blue.png'
            ],
            [
                'name'=>'TV',
                'price'=>'7000',
                'description'=>'this is the television description',
                'category'=>'television',
                'gallery'=>'https://i.rtings.com/assets/pages/PtBw4Lf8/best-tv-medium.jpg'
            ],  
            [
                'name'=>'Washing machine',
                'price'=>'24000',
                'description'=>'this is the Washing mavhine description',
                'category'=>'Washing mashine',
                'gallery'=>'https://i0.wp.com/www.smartprix.com/bytes/wp-content/uploads/2022/04/washing-machines.png?fit=1200%2C675&ssl=1'
            ],    
            [
                'name'=>'Fridge',
                'price'=>'12000',
                'description'=>'this is the Fridge description',
                'category'=>'Fridge',
                'gallery'=>'https://i.pinimg.com/736x/a8/9a/39/a89a391d3ff36a20297bb67621c7b204.jpg'
            ],    
            
        ]);
    }
}
