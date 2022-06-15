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
        //
        DB::table('products')->insert([
            [
            'name'=>'LG TV',
            'price'=>'20000',
            'description'=>'A smart tv with much features',
            'category'=>'electronic',
            'gallery'=>'https://en.wikipedia.org/wiki/Television#/media/File:Samsung_LED_TV.jpg'
            
            ],
            [
                'name'=>'samsung TV',
                'price'=>'25000',
                'description'=>'A smart tv with much features',
                'category'=>'electronic',
                'gallery'=>'https://en.wikipedia.org/wiki/Television#/media/File:Samsung_LED_TV.jpg'
                
                ],
                [
                    'name'=>'LG Smart TV',
                    'price'=>'30000',
                    'description'=>'A smart tv with much features',
                    'category'=>'electronic',
                    'gallery'=>'https://en.wikipedia.org/wiki/Television#/media/File:LG_smart_TV.jpg'
                    
                    ],
                    [
                        'name'=>'LCD generic tv',
                        'price'=>'15999',
                        'description'=>'A generic LCD tv, with speakers on either side of the screen',
                        'category'=>'electronic',
                        'gallery'=>'https://en.wikipedia.org/wiki/Television#/media/File:LCD_generic_tv.jpg'
                        
                        ],
                        [
                            'name'=>'iPhone',
                            'price'=>'15999',
                            'description'=>'A iphone 13 pro ',
                            'category'=>'mobile',
                            'gallery'=>'https://en.wikipedia.org/wiki/Smartphone#/media/File:H_k_tst_apple_store_sales_floor_shop_Ipone_13_pro_December_2021_01.jpg'
                            ],
                            [
                                'name'=>'samsung',
                                'price'=>'15999',
                                'description'=>'Samsung Galaxy s22 ultra ',
                                'category'=>'mobile',
                                'gallery'=>'https://en.wikipedia.org/wiki/Smartphone#/media/File:20220210_%EC%82%BC%EC%84%B1_%EA%B0%A4%EB%9F%AD%EC%8B%9Cs22_%EC%9A%B8%ED%8A%B8%EB%9D%BC.jpg'
                             ],
                             [
                                    'name'=>'LG Refrigerator',
                                    'price'=>'15000',
                                    'description'=>'stlish recess Handle and fastest ice Making',
                                    'category'=>'fridge',
                                    'gallery'=>'https://www.lg.com/np/images/refrigerators/md07539722/gallery/Z01_GL-B181RDGB-Refrigerators-Front-View-DZ-01-vv1.jpg'
                             ],
                             [
                                'name'=>'Samsung fridge',
                                'price'=>'18000',
                                'description'=>'Digital inverter technology double door refrigerator ',
                                'category'=>'fridge',
                                'gallery'=>'https://www.lg.com/np/images/refrigerators/md07539722/gallery/Z01_GL-B181RDGB-Refrigerators-Front-View-DZ-01-vv1.jpg'
                         ]


                    
   ] );
    }
}
