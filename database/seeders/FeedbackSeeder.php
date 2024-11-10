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
            ['name' => 'Puan Yuhanin', 'review' => 'Alhamdulillah harini last CL. Terima kasih ya bagi CL yang bagus. Kerja semua okay dan baik.', 'rating' => 5, 'profession' => '', 'img' => 'review1.jpg'],
            ['name' => 'Puan Aini Gani', 'review' => 'Alhamdulillah syukur dpt Cl yg terbaik dari segi layanan, servis malah tak berkira dlm melakukan kerja rumah dll. Buat Mutiara Confinement, terima kasih utk pakej stay in yg jimat dan murah berbanding yg lain. Moga terus success dan dilimpahkan rezeki. Aamin.', 'rating' => 5, 'profession' => '', 'img' => 'review2.jpg'],
            ['name' => 'Puan Hidayah', 'review' => 'Terima kasih ye utk service CL. CL yg saya dapat CL Nana. Alhamdulillah saya puas hati dan CL sgt profesional, cepat and peramah.', 'rating' => 5, 'profession' => '', 'img' => 'review3.jpg'],
            ['name' => 'Puan Ummirah Che Ross', 'review' => 'Alhamdulillah, Terima kasihh byak mutiara confinement dan CL Yanti. Sya puas hati dgn service yg diberikn dan berusan dgn mutiara. Segala rawatan yang di beri dan cara layanan dari CL Yanti sangat bagus. Terima kasihh banyak.', 'rating' => 5, 'profession' => '', 'img' => 'review4.jpg'],
            ['name' => 'Puan Syira', 'review' => 'Saya nk bg review tentang CL Arumi, best sgt ye CL dgn dia. Dh mcm kawan dh kami. Urutan dia best, makanan dia sedap, puas hati sgt service semua. Buat kerja tak pernah berkira. Klau minta tolong semua pun boleh je dia buat. Kesimpulannya, klau ada rezeki beranak lg, saya nk repeat dgn Mutiara. Terima kasih Mutiara Confinement.', 'rating' => 5, 'profession' => '', 'img' => 'review5.jpg'],
            ['name' => 'Puan Ida Zaharuddin', 'review' => 'Overall feedback, sangat memuaskan hati bila CL Via menjaga saya selama 7 hari rawatan. Badan saya rasa segar selepas diurut, sauna. CL Via juga banyak membantu menjaga baby dan beri saya rehat yang secukupnya. Secara keseluruhan saya amat puas hati dengan servis CL Via. Sangat recommended, terima kasih CL Via.', 'rating' => 5, 'profession' => '', 'img' => 'review6.jpg'],
            ['name' => 'Puan Adila Aziz', 'review' => 'Saya berpuas hati dengan service CL Mar. CL Mar sangat membantu urusan saya especially uruskan baby saya supaya saya dapat rehat yang cukup. Sesi urutan juga best dan melegakan. Makanan yang dimasak juga menepati selera saya. Milk booster pon sedap!!', 'rating' => 5, 'profession' => '', 'img' => 'review7.jpg'],
            ['name' => 'Puan Shafika Hanafi', 'review' => 'Alhamdulillah selesai yee payment sy, terima kasih Mutiara Confinement dan CL Iza atas service yg diberikan. CL Iza memg terbaik segi mengurut bdn, rase ringan dan sedap, penjagaan baby sgt bgus. Dia tak berkira buat kerja, sgt peramah dengan sy dan family, rse mcm keluarga sndri. Sangat berpuas hati dan recommended.', 'rating' => 5, 'profession' => '', 'img' => 'review8.jpg'],
            ['name' => 'Puan Eizzati', 'review' => 'Alhamdulillah saya sangat puas hati dengan rawatan yang CL Kak Jannah buat. Dari segi urutan, bertungku, masakkan dan lain-lain, semua nya saya puas hati lahhhh. Kak Jannah baik tk berkira buat kerja, dia jaga saya dan bby dengan baik. Kak Jannah siap teman saya pergi KK lagi tauu. Masakkan CL Kak Jannah pon semuanya sedap-sedap belaka. Terima kasih CL Kak Jannah dan Mutiara Confinement. Ada rezeki 4 tahun lagi in Sha Allah kita berjumpa.', 'rating' => 5, 'profession' => '', 'img' => 'review9.jpg'],
            ['name' => 'Puan Diela', 'review' => 'Terima kasih ye atas khidmat yg diberikan oleh CL. Alhamdulillah semua sesi berjalan lancar dan terbaik.', 'rating' => 5, 'profession' => '', 'img' => 'review10.jpg']
        ]);
    }
}
