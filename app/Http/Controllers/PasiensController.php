<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasiensController extends Controller
{
    //
    /**
     * @return View
     */
    public function index() 
    {
        return view('datapasien');
    }
}
