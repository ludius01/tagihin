<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use DB;

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
            //   for($bulan=1;$bulan < 13;$bulan++){
            //         $chartuser     = collect(\DB::SELECT("SELECT sum(jml_pekerja) AS jumlah from kondisi_tkm where month(created_at)='$bulan'"))->first();
            //         $jumlah_user[] = $chartuser->jumlah;
            //         }
            return view("superadmin.index");
        }else{
               
                return view('home');
        }
      
    }

  public function edit($id)
    {
        $user= User::find(Auth::user()->id);
        return view("superadmin.profile.edit",compact('user'));
    }
    public function update(Request $request, $id)
    {
        // return $request;
       

            $profil= User::find(Auth::user()->id);

            $profil->password = Hash::make($request->password);
            $profil->save();

        return view("superadmin.profile.show",compact('profil'))->with("msg", "Berhasil Di Ubah");
    }
    public function show()
    {
        $profil = User::find(Auth::user()->id);
        return view("superadmin.profile.show",compact('profil'));
    }


}
