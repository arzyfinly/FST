<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Akademik;


class AcademicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $akademiks = [
            [
                'keyword'               => 'Panduan Pendidikan FST',
                'image_header'          => 'PanduanPendidikan-header.jpg',
                'category_academic_id'   => '1',
            ],
            [
                'keyword'               => 'Program Studi',
                'image_header'          => 'ProgramStudi-header.jpg',
                'category_academic_id'   => '2',
            ],
            [
                'keyword'               => 'Kalender Akademik',
                'image_header'          => 'KalenderAkademik-header.jpg',
                'category_academic_id'   => '3',
            ],
            [
                'keyword'               => 'Prosedur dan Layanan Akademik',
                'image_header'          => 'ProsedurPelayananAkademik-header.jpg',
                'category_academic_id'   => '4',
            ],
        ];

        foreach ($akademiks as $academic) {
            Akademik::create($academic);
        }
    }
}
