<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

use App\userCustom;

class UserCustomsController extends Controller
{
    /**
     * @return View
     */
    public function index() 
    {
        return view('login');
    }

    function checklogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required'
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        
        $username = $request->input('username');
        $password = $request->input('password');
        
        
        $userCustom = userCustom::where('username', $username)->first();
        if(!$userCustom){
            return redirect('/login')->with('error', 'Username atau Password Salah');
        }
        $decryptPass = Crypt::decryptString($userCustom->password);
        if($password == $decryptPass){
            $request->session()->put('id_user', $userCustom->id_user);
            $request->session()->put('nama_user', $userCustom->nama_user);
            $request->session()->put('username', $userCustom->username);

            return redirect('/home')->with('user', 'Kamu adalah User dengan id = '.$userCustom->id_user);
        }
        else{
            return redirect('/')->with('error', 'Username atau Password Salah');
        }
        //dd($decryptPass);
        // if(Auth::attempt($user_data))
        // {
        //     return redirect('login/home');
        // } else {
        //     return back()->with('error', 'Wrong Login Details');
        // }
    }

    function home()
    {
        return view('\layout\home');
    }

    function logout(Request $request) 
    {
        $request->session()->forget(['id_user', 'nama_user', 'username']);
        return redirect('/login');
    }
}
