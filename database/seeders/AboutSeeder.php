<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\About;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'Mutiara Confinement Care',
                'description' => 'Khidmat rawatan dan Penjagaan ibu selepas Bersalin secara tradisional',
                'whatsapp' => '+6282279909994',
                'instagram' => 'https://instagram.com/mutiara_confinement',
                'facebook' => 'https://www.facebook.com/MutiaraConfinement',
                'email' => 'tarashairsalon12@gmail.com',
                'address' => 'Jalan Tun Perak 6, Taman Tun Perak, 43200 Cheras, Selangor, Malaysia',
            ],
            [
                'title' => 'Mutiara Confinement Care',
                'description' => 'Traditional Postpartum Treatment and Care Services for Mothers and Baby',
                'whatsapp' => '+6282279909994',
                'instagram' => 'https://instagram.com/mutiara_confinement',
                'facebook' => 'https://www.facebook.com/MutiaraConfinement',
                'email' => 'tarashairsalon12@gmail.com',
                'address' => 'Jalan Tun Perak 6, Taman Tun Perak, 43200 Cheras, Selangor, Malaysia',
            ],

        ];

        About::insert($data);
    }
}
