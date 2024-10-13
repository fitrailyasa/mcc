<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Feedback;
use Illuminate\Support\Facades\DB;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('feedback')->insert([
            [
                'name' => 'John Doe',
                'profession' => 'CEO, Company A',
                'img' => 'testimonial-1.jpg',
                'review' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis blanditiis excepturi quisquam temporibus voluptatum reprehenderit culpa, quasi corrupti laborum accusamus.',
                'rating' => 5
            ],
            [
                'name' => 'Jane Smith',
                'profession' => 'Manager, Company B',
                'img' => 'testimonial-2.jpg',
                'review' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis blanditiis excepturi quisquam temporibus voluptatum reprehenderit culpa, quasi corrupti laborum accusamus.',
                'rating' => 5
            ],
            [
                'name' => 'Michael Scott',
                'profession' => 'Salesman, Company C',
                'img' => 'testimonial-3.jpg',
                'review' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis blanditiis excepturi quisquam temporibus voluptatum reprehenderit culpa, quasi corrupti laborum accusamus.',
                'rating' => 5
            ],
            [
                'name' => 'Pam Beesly',
                'profession' => 'Secretary, Company D',
                'img' => 'testimonial-2.jpg',
                'review' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis blanditiis excepturi quisquam temporibus voluptatum reprehenderit culpa, quasi corrupti laborum accusamus.',
                'rating' => 5
            ],
        ]);
    }
}
