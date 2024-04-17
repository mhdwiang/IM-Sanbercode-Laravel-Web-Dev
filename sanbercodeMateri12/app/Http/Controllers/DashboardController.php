<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        return view('index');  
    }

    public function daftar() {
        return view('biodata');
    }

    public function home(Request $request) {
        $firstName = $request->input('firstname');
        $lastName = $request->input('lastname');

        return view('home' ["firstname" => $firstName, "lastname" => $lastName]); 
    }
}
