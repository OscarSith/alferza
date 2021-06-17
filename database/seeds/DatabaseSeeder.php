<?php

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
        $this->call(UsersTableSeeder::class);
        $this->call(ProjectSeeder::class);
        $this->call(FlatsSeeder::class);
        $this->call(PicturesSeeder::class);
        $this->call(BenefitSeeder::class);
        $this->call(BlogsTableSeeder::class);
    }
}
