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
                'name' => 'Blossom',
                'slug' => 'blossom',
                'desc' => 'Confinement lady kami akan datang kerumah anda setiap pagi hingga petang pada hari yang telah diatur berdasarkan pakej yang telah anda pilih. Perkhidmatan pakej ini menyediakan masa kerja 8 jam.',
                'img' => 'pakej (1).jpg',
            ],
            [
                'name' => 'Anggrik',
                'slug' => 'anggrik',
                'desc' => 'Confinement lady kami akan datang kerumah anda setiap hari pada masa yang telah ditetapkan mengikuti pakej yang anda pilih. Pakej ini menyediakan kira kira 3 jam waktu kerja.',
                'img' => 'pakej (2).jpg',
            ],
            [
                'name' => 'Dahlia',
                'slug' => 'dahlia',
                'desc' => 'Confinement lady akan datang kerumah anda setiap hari pada masa yang telah ditetapkan mengikuti pakej yang anda pilih. Pakej ini menyediakan kira kira 2 jam waktu bekerja.',
                'img' => 'pakej (3).jpg',
            ],
            [
                'name' => 'Mawar',
                'slug' => 'mawar',
                'desc' => 'Confinement lady akan tinggal di rumah anda untuk tempoh tertentu berdasarkan pakej yang telah dipilih. Pakej ini menyediakan 12 jam masa bekerja untuk confinement lady kami ditempat anda.',
                'img' => 'pakej (4).jpg',
            ],
            [
                'name' => 'Tulip',
                'slug' => 'tulip',
                'desc' => 'Confinement lady kami akan datang kerumah anda setiap hari pada masa yang telah ditetapkan mengikut pakej yang anda pilih. Pakej ini menyediakan kira kira 4 jam waktu bekerja.',
                'img' => 'pakej (5).jpg',
            ],
        ];

        Package::query()->insert($data);
    }
}
