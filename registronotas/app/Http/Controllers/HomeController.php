<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        if ($request->user()->authorizeRoles('administrador','docente','estudiante')) {
            if ($request->user()->hasRole('administrador')) {
                return view('homeadmin');    
            }else{
                if ($request->user()->hasRole('docente')) {
                    return view('homedoc');
                }else{
                    if ($request->user()->hasRole('estudiante')) {
                        return view('homeest');
                    }else{
                        return view('error');
                    }
                }
            }
        }
    }
}
