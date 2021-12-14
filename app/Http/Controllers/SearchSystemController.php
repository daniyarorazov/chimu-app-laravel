<?php

namespace App\Http\Controllers;

use App\Models\ProjectModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchSystemController extends Controller
{
    public function searchUsers(Request $req) {
        $user = DB::table('users')->get();
        $search = $req->get('search');
        $search_filter = $req->get('filter_value');

        $tags = DB::table('skills_tag')->get();
        if ($search_filter) {
            $search_filter = implode(",", $search_filter);
            $user = DB::table('users')->where('name', 'like', '%'.$search.'%')->where('field_activity', 'like', '%'.$search_filter.'%')->orderBy('id', 'asc')->get();
//            $user = DB::table('users')->where('name', 'like', '%'.$search.'%')->orderBy('id', 'asc')->get();
            return view('list_users', ['data' => $user, 'tags' => $tags]);
        echo 'none 1';
        } else if ($search) {
            $search_filter = implode(",", $search_filter);
            $user = DB::table('users')->where('name', 'like', '%'.$search.'%')->where('skills_tag', 'like', '%'.$search_filter.'%')->orderBy('id', 'asc')->get();
//            $user = DB::table('users')->where('name', 'like', '%'.$search.'%')->orderBy('id', 'asc')->get();

            return view('list_users', ['data' => $user, 'tags' => $tags]);
            echo 'none 2';
        }

        return view('list_users', ['data' => $user, 'tags' => $tags]);


    }


}
