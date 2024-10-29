<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(10)->create();
        $data = [
            [
                'name' => 'Malaysia',
                'slug' => 'ms',
            ],
            [
                'name' => 'English',
                'slug' => 'en',
            ],
        ];

        Category::query()->insert($data);
    }
}
