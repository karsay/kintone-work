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
        DB::table('products')->insert([
            [
                'name' => 'プロダクト1',
                'image_url' => 'https://www.shoshinsha-design.com/wp-content/uploads/2020/05/noimage-760x460.png',
                'information' => 'ここに商品の情報が入ります',
                'price' => 100,
            ],
            [
                'name' => 'プロダクト2',
                'image_url' => 'https://www.shoshinsha-design.com/wp-content/uploads/2020/05/noimage-760x460.png',
                'information' => 'ここに商品の情報が入ります',
                'price' => 100,
            ],
            [
                'name' => 'プロダクト3',
                'image_url' => 'https://www.shoshinsha-design.com/wp-content/uploads/2020/05/noimage-760x460.png',
                'information' => 'ここに商品の情報が入ります',
                'price' => 100,
            ],
            [
                'name' => 'プロダクト4',
                'image_url' => 'https://www.shoshinsha-design.com/wp-content/uploads/2020/05/noimage-760x460.png',
                'information' => 'ここに商品の情報が入ります',
                'price' => 100,
            ],
            [
                'name' => 'プロダクト5',
                'image_url' => 'https://www.shoshinsha-design.com/wp-content/uploads/2020/05/noimage-760x460.png',
                'information' => 'ここに商品の情報が入ります',
                'price' => 100,
            ],
            [
                'name' => 'プロダクト6',
                'image_url' => 'https://www.shoshinsha-design.com/wp-content/uploads/2020/05/noimage-760x460.png',
                'information' => 'ここに商品の情報が入ります',
                'price' => 100,
            ],
            [
                'name' => 'プロダクト7',
                'image_url' => 'https://www.shoshinsha-design.com/wp-content/uploads/2020/05/noimage-760x460.png',
                'information' => 'ここに商品の情報が入ります',
                'price' => 100,
            ],
            [
                'name' => 'プロダクト8',
                'image_url' => 'https://www.shoshinsha-design.com/wp-content/uploads/2020/05/noimage-760x460.png',
                'information' => 'ここに商品の情報が入ります',
                'price' => 100,
            ],
            [
                'name' => 'プロダクト9',
                'image_url' => 'https://www.shoshinsha-design.com/wp-content/uploads/2020/05/noimage-760x460.png',
                'information' => 'ここに商品の情報が入ります',
                'price' => 100,
            ],
            [
                'name' => 'プロダクト10',
                'image_url' => 'https://www.shoshinsha-design.com/wp-content/uploads/2020/05/noimage-760x460.png',
                'information' => 'ここに商品の情報が入ります',
                'price' => 100,
            ],
            [
                'name' => 'プロダクト11',
                'image_url' => 'https://www.shoshinsha-design.com/wp-content/uploads/2020/05/noimage-760x460.png',
                'information' => 'ここに商品の情報が入ります',
                'price' => 100,
            ],
            [
                'name' => 'プロダクト12',
                'image_url' => 'https://www.shoshinsha-design.com/wp-content/uploads/2020/05/noimage-760x460.png',
                'information' => 'ここに商品の情報が入ります',
                'price' => 100,
            ],
        ]);
    }
}
