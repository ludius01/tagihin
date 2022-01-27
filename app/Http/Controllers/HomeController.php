<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use DB;
use App\Model\Alat;
use App\Model\Paket;


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
              for($bulan=1;$bulan < 13;$bulan++){
                    $chartuser     = User::where('up_liner_id',Auth::user()->id)->whereMonth('created_at',$bulan)->count();;
                    $jumlah_user[] = $chartuser;
                    }
                $client = User::where('up_liner_id',Auth::user()->id)->count();
                $alat = Alat::where('id_admin',Auth::user()->id)->count();
                $paket = Paket::where('id_admin',Auth::user()->id)->count();
            return view("superadmin.index",compact('alat','paket','jumlah_user','client'));
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
            $profil->username = $request->username;
            $profil->alamat = $request->alamat;
            $profil->No_Hp = $request->No_Hp; 
            if($request->password != null){
            $profil->password = Hash::make($request->password);
            }
            $profil->save();

        return view("superadmin.profile.show",compact('profil'))->with("msg", "Berhasil Di Ubah");
    }
    public function show()
    {
        $profil = User::find(Auth::user()->id);
        return view("superadmin.profile.show",compact('profil'));
    }


}
