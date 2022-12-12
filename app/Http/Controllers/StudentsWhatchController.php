<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentsWhatchController extends Controller
{
    public function show()
    {
        $info = DB::table('users')
            ->select(array('users.name', 'users.email', DB::raw('COUNT(userprogress.lesson_id) as progress')))
            ->Join('userprogress', 'users.id', '=', 'userprogress.user_id')
            ->where('users.role', '=', 'student')
            ->where('userprogress.status', '=', '1')
            ->groupBy('userprogress.user_id')
            ->orderBy('progress', 'desc')
            ->get();

        return view('sw', ['name' => $info]);
    }
}
