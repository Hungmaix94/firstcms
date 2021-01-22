<?php

namespace App\Http\Controllers;
use App\User;

class TestController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::first();

        return $user;
    }
}
