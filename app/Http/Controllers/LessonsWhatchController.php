<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LessonsWhatchController extends Controller
{
    public function show()
    {
        $info = DB::table('lessons')
            ->select(array('lessons.title', DB::raw('COUNT(userprogress.user_id) as progress')))
            ->Join('userprogress', 'lessons.id', '=', 'userprogress.lesson_id')
            ->where('userprogress.status', '<>', '1')
            ->groupBy('userprogress.lesson_id')
            ->orderBy('progress', 'desc')
            ->get();

        return view('lw', ['title' => $info]);
    }
}
