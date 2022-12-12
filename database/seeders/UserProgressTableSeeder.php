<?php

namespace Database\Seeders;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UserProgressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //для генерации случайной последовательности пройденных уроков
        //без повторений idшников
        function generateRandomNumber ($count){
            $lessons = [1=>1,2=>2,3=>3,4=>4,5=>5,6=>6,
                7=>7,8=>8,9=>9,10=>10,11=>11,12=>12,13=>13,14=>14,
                15=>15,16=>16,17=>17,18=>18,19=>19,20=>20,21=>21,22=>22,
                23=>23,23=>24,25=>25,26=>26,27=>27,28=>28];
            //return array_rand(range(1, $maximum), $count);
            return array_rand($lessons, $count);
        }

        //цикл по студентам
        for($i=6;$i<=2001;$i++)
        {
            //генерируем случайную неповторяющуюся последовательность
            //пройденных уроков
            $lessons = generateRandomNumber (27);
            for($j=0;$j<26;$j++)
            {
                if ($j < rand(1,20))
                {
                    //пройден
                    $status = 1;
                }else{
                    //не пройден
                    $status = 0;
                }
                DB::table('userprogress')->insert([
                    'created_at' => date("Y-m-d"),
                    'user_id'    => $i,
                    'course_id'  => 1,
                    'lesson_id'  => $lessons[$j],
                    'status'     => $status
                ]);
            }
        }
    }
}
