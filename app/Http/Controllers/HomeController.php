<?php

namespace App\Http\Controllers;

use DB;

class HomeController extends Controller
{
    public function index()
    {

        $sql = "SELECT * FROM users WHERE id = " . $_GET["user_id"];

        $users = DB::select($sql);
        return view("home.index", [
            "users" => $users,
        ]);
    }
}
