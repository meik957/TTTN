<?php

use Illuminate\Database\Seeder;

class CategorylistTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorylist')->insert([
            ['name'=>'iPhone'],
            ['name'=>'Samsung'],
            ['name'=>'Oppo'],
            ['name'=>'Nokia'],
            ['name'=>'Huawei'],
            ['name'=>'Xiaomi'],
            ['name'=>'HTC'],
            ['name'=>'Asus'],
        ]);
    }
}
