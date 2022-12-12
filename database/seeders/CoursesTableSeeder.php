<?php

namespace Database\Seeders;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'created_at' => date("Y-m-d"),
            'title'     => "Просто курс",
            'content'   => "Просто курс, состоящий из 27 уроков."
        ]);
    }
}
