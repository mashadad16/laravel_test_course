<?php

namespace Database\Seeders;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LessonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<=26;$i++)
        {
            DB::table('lessons')->insert([
                'created_at' => date("Y-m-d"),
                'title'      => "Урок ".intval($i+1),
                'content'    => "Тестовый урок ".intval($i+1),
                'course_id'  => 1
            ]);
        }

    }
}
