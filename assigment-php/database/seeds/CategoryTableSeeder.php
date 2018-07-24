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
        \Illuminate\Support\Facades\DB::table('foods')->truncate();
        \Illuminate\Support\Facades\DB::table('foods')->insert([
            [

            ],
            [

            ],
            [

            ],
            [

            ],
            [
                
            ]
        ]);
    }
}
