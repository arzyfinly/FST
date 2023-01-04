<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CategoryAcademic;

class CategoryAcademicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Categories = [
            [
                'name' => 'Panduan Pendidikan FST',
            ],
            [
                'name' => 'Program Studi',
            ],
            [
                'name' => 'Kalender Akademik',
            ],
            [
                'name' => 'Prosedur dan Layanan Akademik',
            ]
        ];

        foreach ($Categories as $category) {
            CategoryAcademic::create($category);
        }
    }
}
