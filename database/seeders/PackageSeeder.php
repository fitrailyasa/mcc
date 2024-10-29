<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Package;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'category_id' => 1,
                'name' => 'Blossom',
                'slug' => 'blossom',
                'desc' => 'Confinement lady kami akan datang kerumah anda setiap pagi hingga petang pada hari yang telah diatur berdasarkan pakej yang telah anda pilih. Perkhidmatan pakej ini menyediakan masa kerja 8 jam.',
                'img' => 'pakej (1).jpg',
            ],
            [
                'category_id' => 1,
                'name' => 'Anggrik',
                'slug' => 'anggrik',
                'desc' => 'Confinement lady kami akan datang kerumah anda setiap hari pada masa yang telah ditetapkan mengikuti pakej yang anda pilih. Pakej ini menyediakan kira kira 3 jam waktu kerja.',
                'img' => 'pakej (2).jpg',
            ],
            [
                'category_id' => 1,
                'name' => 'Dahlia',
                'slug' => 'dahlia',
                'desc' => 'Confinement lady akan datang kerumah anda setiap hari pada masa yang telah ditetapkan mengikuti pakej yang anda pilih. Pakej ini menyediakan kira kira 2 jam waktu bekerja.',
                'img' => 'pakej (3).jpg',
            ],
            [
                'category_id' => 1,
                'name' => 'Mawar',
                'slug' => 'mawar',
                'desc' => 'Confinement lady akan tinggal di rumah anda untuk tempoh tertentu berdasarkan pakej yang telah dipilih. Pakej ini menyediakan 12 jam masa bekerja untuk confinement lady kami ditempat anda.',
                'img' => 'pakej (4).jpg',
            ],
            [
                'category_id' => 1,
                'name' => 'Tulip',
                'slug' => 'tulip',
                'desc' => 'Confinement lady kami akan datang kerumah anda setiap hari pada masa yang telah ditetapkan mengikut pakej yang anda pilih. Pakej ini menyediakan kira kira 4 jam waktu bekerja.',
                'img' => 'pakej (5).jpg',
            ],
            [
                'category_id' => 2,
                'name' => 'Blossom',
                'slug' => 'blossom-en',
                'desc' => 'Our confinement lady will visit your home every day, from morning until evening, on scheduled days according to the package you have chosen. This package provides an 8-hour workday.',
                'img' => 'pakej (1).jpg',
            ],
            [
                'category_id' => 2,
                'name' => 'Anggrik',
                'slug' => 'anggrik-en',
                'desc' => 'Our confinement lady will come to your home each day at a prearranged time, based on the package you have selected. This package offers approximately 3 hours of service daily.',
                'img' => 'pakej (2).jpg',
            ],
            [
                'category_id' => 2,
                'name' => 'Dahlia',
                'slug' => 'dahlia-en',
                'desc' => 'The confinement lady will visit your home daily at the time set according to the package you\'ve chosen. This package provides around 2 hours of service daily.',
                'img' => 'pakej (3).jpg',
            ],
            [
                'category_id' => 2,
                'name' => 'Mawar',
                'slug' => 'mawar-en',
                'desc' => 'The confinement lady will stay at your home for a specific period, depending on the package selected. This package provides 12 hours of service each day.',
                'img' => 'pakej (4).jpg',
            ],
            [
                'category_id' => 2,
                'name' => 'Tulip',
                'slug' => 'tulip-en',
                'desc' => 'Our confinement lady will visit your home daily at the scheduled time, according to the package you have selected. This package offers approximately 4 hours of service daily.',
                'img' => 'pakej (5).jpg',
            ],
        ];

        Package::query()->insert($data);
    }
}
