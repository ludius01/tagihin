<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Model\Tkm;
use App\Model\Tks;
use App\Model\Kunjungan;
use App\Model\Kondisi_tkm;
use App\Model\Aktiv_absn;

use Auth;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->is_permission == '1') {
            return view("superadmin.index");
        }else{
               
                return view('home');
        }
      
    }
}
