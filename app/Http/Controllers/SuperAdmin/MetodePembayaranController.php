<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Model\Metode_pembayaran;
use Illuminate\Http\Request;
use Auth;

class MetodePembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $metods = Metode_pembayaran::where('id_admin',Auth::user()->id)->get();
         return view('superadmin.metode_pembayaran.index',compact('metods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('superadmin.metode_pembayaran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        Metode_pembayaran::create($request->all());
        return redirect('metode-pembayaran');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Metode_pembayaran  $metode_pembayaran
     * @return \Illuminate\Http\Response
     */
    public function show(Metode_pembayaran $metode_pembayaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Metode_pembayaran  $metode_pembayaran
     * @return \Illuminate\Http\Response
     */
    public function edit(Metode_pembayaran $metode_pembayaran)
    {
        $metod = Metode_pembayaran::find($metode_pembayaran->id);
        return view('superadmin.metode_pembayaran.edit',compact('metod'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Metode_pembayaran  $metode_pembayaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Metode_pembayaran $metode_pembayaran)
    {
        $metode_pembayaran->update($request->all());
        return redirect('metode-pembayaran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Metode_pembayaran  $metode_pembayaran
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $metod = Metode_pembayaran::find($id);
        Metode_pembayaran::destroy($metod->id);
        return redirect('metode-pembayaran');
    }
}
