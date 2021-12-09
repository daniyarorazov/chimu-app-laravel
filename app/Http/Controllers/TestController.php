<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function showTags(Request $request) {
        $tags = DB::select('select * from field_activity');
        $users = DB::select('select * from users');
        return view('test', ['tags' => $tags, 'users' => $users]);
    }
}
