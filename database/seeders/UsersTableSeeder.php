<?php

namespace Database\Seeders;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{

/**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        function gen_password($length = 6)
        {
            $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
            return substr(str_shuffle($chars), 0, $length);
        }

        function gen_email($length = 10)
        {
            $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
            $mail_list = ['gmail.com', 'yandex.ru', 'outlook.com', 'mail.ru'];
            return substr(str_shuffle($chars), 0, $length) . '@' . $mail_list[rand(0, 3)];
        }

        function gen_name_surname($length_surname = 10, $length_name = 10)
        {
            $chars = ["AEIOUY", "BCDFGHJKLMNPRSTV", "aeiouy", "bcdfghjklmnprstv"];

            if (rand(0, 1) == 0) {
                //начинается с заглавной гласной буквы
                $fio = substr(str_shuffle($chars[0]), 0, 1);
                for ($i = 0; $i <= rand(1, $length_surname / 2); $i++) {
                    if ($i % 2 == 1) {
                        $fio .= substr(str_shuffle($chars[2]), 0, 2);
                    } else {
                        $fio .= substr(str_shuffle($chars[3]), 0, 2);
                    }
                }
            } else {
                //начинается с заглавной согласной буквы
                $fio = substr(str_shuffle($chars[1]), 0, 1);
                for ($i = 0; $i <= rand(1, $length_surname / 2); $i++) {
                    if ($i % 2 == 0) {
                        $fio .= substr(str_shuffle($chars[2]), 0, 1);
                    } else {
                        $fio .= substr(str_shuffle($chars[3]), 0, 1);
                    }
                }
            }

            if (rand(0, 1) == 0) {
                //начинается с заглавной гласной буквы
                $name = substr(str_shuffle($chars[0]), 0, 1);
                for ($i = 0; $i <= rand(1, $length_surname / 2); $i++) {
                    if ($i % 2 == 1) {
                        $name .= substr(str_shuffle($chars[2]), 0, 2);
                    } else {
                        $name .= substr(str_shuffle($chars[3]), 0, 2);
                    }
                }
            } else {
                //начинается с заглавной согласной буквы
                $name = substr(str_shuffle($chars[1]), 0, 1);
                for ($i = 0; $i <= rand(1, $length_surname / 2); $i++) {
                    if ($i % 2 == 0) {
                        $name .= substr(str_shuffle($chars[2]), 0, 1);
                    } else {
                        $name .= substr(str_shuffle($chars[3]), 0, 1);
                    }
                }
            }

            return $fio . ' ' . $name;
        }

        for ($i = 0; $i <= 3; $i++) {
            DB::table('users')->insert([
                'name' => gen_name_surname(15, 10),
                'email' => gen_email(rand(5, 15)),
                'email_verified_at' => date("Y-m-d"),
                'password' => password_hash(gen_password(8), PASSWORD_ARGON2I),
                'created_at' => date("Y-m-d"),
                'role' => 'admin'
            ]);
        }
        for ($i = 4; $i <= 1999; $i++) {
            DB::table('users')->insert([
                'name' => gen_name_surname(15, 10),
                'email' => gen_email(rand(5, 15)),
                'email_verified_at' => date("Y-m-d"),
                'password' => password_hash(gen_password(8), PASSWORD_ARGON2I),
                'created_at' => date("Y-m-d"),
                'role' => 'student'
            ]);
        }
    }
}
