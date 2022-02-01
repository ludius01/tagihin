<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Model\Paket;
use Illuminate\Http\Request;
use Auth;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pagination = 1;
        $pakets = Paket::where('id_admin',Auth::user()->id)->paginate(1);
        return view('superadmin.paket.index',compact('pakets'))->with('i', ($request->input('page', 1) - 1) * $pagination);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jumlah = Paket::all()->max('id');
        $a = $jumlah+ 1;
        $kode ='K'.sprintf("%03s", $a);
        return view('superadmin.paket.create',compact('kode'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Paket::create($request->all());
        return redirect('paket');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function show(Paket $paket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function edit(Paket $paket)
    {
        // return $paket;
        return view('superadmin.paket.edit',compact('paket'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paket $paket)
    {
        $paket->update(
            $request->all(),
        );

        return redirect('paket/'.$paket->id.'/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Paket = Paket::find($id);
        Paket::destroy($Paket->id);
        return redirect('paket'); 
    }
}
