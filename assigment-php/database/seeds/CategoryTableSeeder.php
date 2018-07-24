<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('categories')->truncate();
        \Illuminate\Support\Facades\DB::table('categories')->insert([
            [
                'name'=>'Khai vị',
                'description'=>'Ăn nhẹ trước bữa chính',
                'images'=>'https://halfoff.adspayusa.com/wp-content/uploads/2018/03/sushi_and_sashimi_for_two.0.jpg'
            ],
            [
                'name'=>'Món chính',
                'description'=>'Đầy đủ dinh dưỡng , no bụng',
                'images'=>'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c0/Pizza_med_gorgonzola%2C_spinat_og_bacon%2C_March_2010.jpg/240px-Pizza_med_gorgonzola%2C_spinat_og_bacon%2C_March_2010.jpg'
            ],
            [

                'name'=>'Tráng miệng',
                'description'=>'Đồ ngọt',
                'images'=>'https://ameovat.com/wp-content/uploads/2017/03/cach-nau-che-thap-cam-600x400.jpg'
            ],
            [
                'name'=>'Đồ Tây',
                'description'=>'Du nhập từ phương tây',
                'images'=>'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c0/Pizza_med_gorgonzola%2C_spinat_og_bacon%2C_March_2010.jpg/240px-Pizza_med_gorgonzola%2C_spinat_og_bacon%2C_March_2010.jpg'

            ],
            [
                'name'=>'Bún phở',
                'description'=>'Đồ có sợi bún phở mì',
                'images'=>'https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/B%C3%BAn_thang.JPG/250px-B%C3%BAn_thang.JPG'
            ]
        ]);
    }
}
