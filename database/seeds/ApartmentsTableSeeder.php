<?php

use Illuminate\Database\Seeder;

class ApartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('apartments')->truncate();
        DB::table('apartments')->insert([
            [
                'id' => 1,
                'name' =>'Chung cư Xuân Phương Residence',
                'address' => 'Xuân Phương - Hà Nội',
                'price' => '19900000',
                'images' => 'https://media.ohay.tv/v1/content/2015/12/keangnam-hanoi-landmark-tower-shared-photo-us-6512bd43d9caa6e02c990b0a82652dca-smaller-11-ohay-tv-63478.jpg',
                'description' => 'Chung cư đẹp.',
                'detail' => 'Chung cư siêu đẹp',
            ],
            [
                'id' => 2,
                'name' =>'Chung cư Xuân Garden',
                'address' => 'Xuân Phương - Hà Nội',
                'price' => '19900000',
                'images' => 'https://media.ohay.tv/v1/content/2015/12/keangnam-hanoi-landmark-tower-shared-photo-us-6512bd43d9caa6e02c990b0a82652dca-smaller-11-ohay-tv-63478.jpg',
                'description' => 'Chung cư đẹp.',
                'detail' => 'Chung cư siêu đẹp',
            ],
            [
                'id' => 3,
                'name' =>'Chung cư Xuân Phương Residence',
                'address' => 'Xuân Phương - Hà Nội',
                'price' => '19900000',
                'images' => 'https://media.ohay.tv/v1/content/2015/12/keangnam-hanoi-landmark-tower-shared-photo-us-6512bd43d9caa6e02c990b0a82652dca-smaller-11-ohay-tv-63478.jpg',
                'description' => 'Chung cư đẹp.',
                'detail' => 'Chung cư siêu đẹp',
            ],
            [
                'id' => 4,
                'name' =>'Chung cư Xuân',
                'address' => 'Xuân Phương - Hà Nội',
                'price' => '19900000',
                'images' => 'https://media.ohay.tv/v1/content/2015/12/keangnam-hanoi-landmark-tower-shared-photo-us-6512bd43d9caa6e02c990b0a82652dca-smaller-11-ohay-tv-63478.jpg',
                'description' => 'Chung cư đẹp.',
                'detail' => 'Chung cư siêu đẹp',
            ],
            [
                'id' => 5,
                'name' =>'Chung cư Xuân Phương Residence',
                'address' => 'Xuân Phương - Hà Nội',
                'price' => '19900000',
                'images' => 'https://media.ohay.tv/v1/content/2015/12/keangnam-hanoi-landmark-tower-shared-photo-us-6512bd43d9caa6e02c990b0a82652dca-smaller-11-ohay-tv-63478.jpg',
                'description' => 'Chung cư đẹp.',
                'detail' => 'Chung cư siêu đẹp',
            ],
            [
                'id' => 6,
                'name' =>'Chung cư Residence',
                'address' => 'Xuân Phương - Hà Nội',
                'price' => '19900000',
                'images' => 'https://media.ohay.tv/v1/content/2015/12/keangnam-hanoi-landmark-tower-shared-photo-us-6512bd43d9caa6e02c990b0a82652dca-smaller-11-ohay-tv-63478.jpg',
                'description' => 'Chung cư đẹp.',
                'detail' => 'Chung cư siêu đẹp',
            ],
            [
                'id' => 7,
                'name' =>'Chung cư Hà Đông',
                'address' => 'Xuân Phương - Hà Nội',
                'price' => '19900000',
                'images' => 'https://media.ohay.tv/v1/content/2015/12/keangnam-hanoi-landmark-tower-shared-photo-us-6512bd43d9caa6e02c990b0a82652dca-smaller-11-ohay-tv-63478.jpg',
                'description' => 'Chung cư đẹp.',
                'detail' => 'Chung cư siêu đẹp',
            ],
            [
                'id' => 8,
                'name' =>'Chung cư Xuân Phương Residence',
                'address' => 'Xuân Phương - Hà Nội',
                'price' => '19900000',
                'images' => 'https://media.ohay.tv/v1/content/2015/12/keangnam-hanoi-landmark-tower-shared-photo-us-6512bd43d9caa6e02c990b0a82652dca-smaller-11-ohay-tv-63478.jpg',
                'description' => 'Chung cư đẹp.',
                'detail' => 'Chung cư siêu đẹp',
            ],
            [
                'id' => 9,
                'name' =>'Chung cư Xuân Phương Residence',
                'address' => 'Xuân Phương - Hà Nội',
                'price' => '19900000',
                'images' => 'https://media.ohay.tv/v1/content/2015/12/keangnam-hanoi-landmark-tower-shared-photo-us-6512bd43d9caa6e02c990b0a82652dca-smaller-11-ohay-tv-63478.jpg',
                'description' => 'Chung cư đẹp.',
                'detail' => 'Chung cư siêu đẹp',
            ],
            [
                'id' => 10,
                'name' =>'Chung cư Xuân Phương Residence',
                'address' => 'Xuân Phương - Hà Nội',
                'price' => '19900000',
                'images' => 'https://media.ohay.tv/v1/content/2015/12/keangnam-hanoi-landmark-tower-shared-photo-us-6512bd43d9caa6e02c990b0a82652dca-smaller-11-ohay-tv-63478.jpg',
                'description' => 'Chung cư đẹp.',
                'detail' => 'Chung cư siêu đẹp',
            ],
            [
                'id' => 11,
                'name' =>'Chung cư Xuân Phương Residence',
                'address' => 'Xuân Phương - Hà Nội',
                'price' => '19900000',
                'images' => 'https://media.ohay.tv/v1/content/2015/12/keangnam-hanoi-landmark-tower-shared-photo-us-6512bd43d9caa6e02c990b0a82652dca-smaller-11-ohay-tv-63478.jpg',
                'description' => 'Chung cư đẹp.',
                'detail' => 'Chung cư siêu đẹp',
            ],
            [
                'id' => 12,
                'name' =>'Chung cư Hà Tây',
                'address' => 'Xuân Phương - Hà Nội',
                'price' => '19900000',
                'images' => 'https://media.ohay.tv/v1/content/2015/12/keangnam-hanoi-landmark-tower-shared-photo-us-6512bd43d9caa6e02c990b0a82652dca-smaller-11-ohay-tv-63478.jpg',
                'description' => 'Chung cư đẹp.',
                'detail' => 'Chung cư siêu đẹp',
            ],
            [
                'id' => 13,
                'name' =>'Chung cư Cư Chung',
                'address' => 'Xuân Phương - Hà Nội',
                'price' => '19900000',
                'images' => 'https://media.ohay.tv/v1/content/2015/12/keangnam-hanoi-landmark-tower-shared-photo-us-6512bd43d9caa6e02c990b0a82652dca-smaller-11-ohay-tv-63478.jpg',
                'description' => 'Chung cư đẹp.',
                'detail' => 'Chung cư siêu đẹp',
            ],
            [
                'id' => 14,
                'name' =>'Chung cư Hà Nội',
                'address' => 'Xuân Phương - Hà Nội',
                'price' => '19900000',
                'images' => 'https://media.ohay.tv/v1/content/2015/12/keangnam-hanoi-landmark-tower-shared-photo-us-6512bd43d9caa6e02c990b0a82652dca-smaller-11-ohay-tv-63478.jpg',
                'description' => 'Chung cư đẹp.',
                'detail' => 'Chung cư siêu đẹp',
            ],
            [
                'id' => 15,
                'name' =>'Chung cư Residence2',
                'address' => 'Xuân Phương - Hà Nội',
                'price' => '19900000',
                'images' => 'https://media.ohay.tv/v1/content/2015/12/keangnam-hanoi-landmark-tower-shared-photo-us-6512bd43d9caa6e02c990b0a82652dca-smaller-11-ohay-tv-63478.jpg',
                'description' => 'Chung cư đẹp.',
                'detail' => 'Chung cư siêu đẹp',
            ],
            [
                'id' => 16,
                'name' =>'Chung cư Xuân ',
                'address' => 'Xuân Phương - Hà Nội',
                'price' => '19900000',
                'images' => 'https://media.ohay.tv/v1/content/2015/12/keangnam-hanoi-landmark-tower-shared-photo-us-6512bd43d9caa6e02c990b0a82652dca-smaller-11-ohay-tv-63478.jpg',
                'description' => 'Chung cư đẹp.',
                'detail' => 'Chung cư siêu đẹp',
            ],
            [
                'id' => 17,
                'name' =>'Chung cư Xuân Residence',
                'address' => 'Xuân Phương - Hà Nội',
                'price' => '19900000',
                'images' => 'https://media.ohay.tv/v1/content/2015/12/keangnam-hanoi-landmark-tower-shared-photo-us-6512bd43d9caa6e02c990b0a82652dca-smaller-11-ohay-tv-63478.jpg',
                'description' => 'Chung cư đẹp.',
                'detail' => 'Chung cư siêu đẹp',
            ],
            [
                'id' => 18,
                'name' =>'Chung cư Phương Residence',
                'address' => 'Xuân Phương - Hà Nội',
                'price' => '19900000',
                'images' => 'https://media.ohay.tv/v1/content/2015/12/keangnam-hanoi-landmark-tower-shared-photo-us-6512bd43d9caa6e02c990b0a82652dca-smaller-11-ohay-tv-63478.jpg',
                'description' => 'Chung cư đẹp.',
                'detail' => 'Chung cư siêu đẹp',
            ],
            [
                'id' => 19,
                'name' =>'Chung cư Xuân Phương',
                'address' => 'Xuân Phương - Hà Nội',
                'price' => '19900000',
                'images' => 'https://media.ohay.tv/v1/content/2015/12/keangnam-hanoi-landmark-tower-shared-photo-us-6512bd43d9caa6e02c990b0a82652dca-smaller-11-ohay-tv-63478.jpg',
                'description' => 'Chung cư đẹp.',
                'detail' => 'Chung cư siêu đẹp',
            ],
            [
                'id' => 20,
                'name' =>'Chung cư Residence',
                'address' => 'Xuân Phương - Hà Nội',
                'price' => '19900000',
                'images' => 'https://media.ohay.tv/v1/content/2015/12/keangnam-hanoi-landmark-tower-shared-photo-us-6512bd43d9caa6e02c990b0a82652dca-smaller-11-ohay-tv-63478.jpg',
                'description' => 'Chung cư đẹp.',
                'detail' => 'Chung cư siêu đẹp',
            ],
        ]);
    }
}