<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        $this->call(CategoryProfileSeeder::class);
        $this->call(ProfileSeeder::class);
        $this->call(ContentProfilSeeder::class);
        $this->call(CategoryAcademicSeeder::class);
        $this->call(AcademicSeeder::class);
        $this->call(ContentAcademicSeeder::class);
    }
}
