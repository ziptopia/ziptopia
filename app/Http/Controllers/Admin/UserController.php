<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * show all users
     */
    public function index(Request $request)
    {

        // default
        $users = DB::table('users')->paginate(15);

        // search
        if ($request->search_field && $request->search_str) {
            if ($request->search_field != '' && $request->search_str != '') {
                $users = DB::table('users')->where($request->search_field, '=', $request->search_str)->paginate(15);
            }
        }

        return view('admin.member.index', [
            'users' => $users
        ]);
    }
}
