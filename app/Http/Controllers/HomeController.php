<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    /**
     * @return View
     */
    public function index(Request $request) 
    {
        return view('layout.home');
    }
}
