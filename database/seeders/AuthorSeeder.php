<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Author::factory()
            ->count(25)
            ->hasBooks(12)
            ->create();

        Author::factory()
            ->count(10)
            ->hasBooks(2)
            ->create();

        Author::factory()
            ->count(5)
            ->create();
    }
}
