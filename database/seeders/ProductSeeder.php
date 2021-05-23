<?php

namespace Database\Seeders;

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
        //
        DB::table('products')->insert([
            [   'name'=>'Redimi',
                'price'=>'25000',
                'description'=>'Smartphone with 6GB',
                'category'=>'mobile',
                'gallery'=>'https://images.samsung.com/is/image/samsung/assets/us/mobile/smartphones/06242020-part2/dt/ASeries.jpg?$1440_768_JPG$'
            ],

            [   'name'=>'oppo',
                'price'=>'15000',
                'description'=>'Smartphone with 8GB',
                'category'=>'mobile',
                'gallery'=>'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.oppo.com%2Fnp%2Fsmartphones%2Fseries-f%2Ff19-pro%2F&psig=AOvVaw22MReedoHXEPPhc3VbLAP2&ust=1620570719126000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCKir4sGmuvACFQAAAAAdAAAAABAD'
            ],

            [   'name'=>'Samsung',
                'price'=>'10000',
                'description'=>'SmartTV with HD display',
                'category'=>'TV',
                'gallery'=>'https://images.samsung.com/is/image/samsung/levant-uhd-tu8500-ua55tu8500uxtw-frontblack-229855928?$684_547_PNG$'
            ],

            [   'name'=>'Sony',
                'price'=>'250000',
                'description'=>'Android TV',
                'category'=>'TV',
                'gallery'=>'https://images-na.ssl-images-amazon.com/images/I/7198DOeKMBL._AC_SL1077_.jpg'
            ],

            [   'name'=>'Samsung',
                'price'=>'30000',
                'description'=>'dual door fridge with smart feature',
                'category'=>'fridge',
                'gallery'=>'https://www.appliancesonline.com.au/product/samsung-825l-french-door-fridge-srf825bfh4'
            ],
        ]);
    }
}
