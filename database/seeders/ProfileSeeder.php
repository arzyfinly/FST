<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profil;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profiles = [
            [
                'keyword'               => 'Sejarah Fakultas Teknik Uniba Madura',
                'image_header'          => 'sejarahFST-header.jpg',
                'category_profile_id'   => '1',
            ],
        ];

        foreach ($profiles as $profile) {
            Profil::create($profile);
        }
    }
}
