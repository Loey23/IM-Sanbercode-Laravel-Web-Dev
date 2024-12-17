<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function register(){
        return view ('page.register');
    }

    public function home(Request $request){
        $fname = $request->input('first');
        $lname = $request->input('last');

        return view('page.home', ['first' => $fname, 'last' => $lname]);
    }
}
