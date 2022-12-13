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
        //\App\Models\User::factory(10)->create();
        //\App\Models\User::factory(4)->create();
        //\App\Models\User::factory(1996)->create();
        $this->call(UsersTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
        $this->call(LessonsTableSeeder::class);
        $this->call(UserProgressTableSeeder::class);
    }
}
