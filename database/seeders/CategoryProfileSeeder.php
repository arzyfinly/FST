<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CategoryProfile;

class CategoryProfileSeeder extends Seeder
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
                'name' => 'Sejarah',
            ],
            [
                'name' => 'Visi, Misi dan Tujuan',
            ],
            [
                'name' => 'Identitas FST',
            ],
            [
                'name' => 'Struktur Organisasi',
            ]
        ];

        foreach ($Categories as $category) {
            CategoryProfile::create($category);
        }
    }
}
