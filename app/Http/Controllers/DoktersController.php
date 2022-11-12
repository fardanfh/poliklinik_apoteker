<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dokter;

class DoktersController extends Controller
{
    //
    /**
     * @return View
     */
    public function index()
    {
        $data=Dokter::all();
        return view('datadokter')->with('data',$data);
    }

    /**
     * show the form  for creating  a new resource
     * 
     * @return \Illuminate\Http\Response
     */
    public function create() 
    {
        return view('inputdokter');
    }

    /**
     * Store a newly  created resource in storange.
     * 
     * @param \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) 
    {
        $data = [
            'id_dokter'=>$request->id_dokter,
            'id_poli'=>$request->id_poli,
            'nama_dokter'=>$request->nama,
            'alamat'=>$request->alamat,
            'no_ponsel'=>$request->no_ponsel,
        ];
        Dokter::create($data);

        return redirect('dokter');

    }
}
