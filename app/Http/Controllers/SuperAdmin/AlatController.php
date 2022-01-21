<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Model\Alat;
use Illuminate\Http\Request;
use Auth;

class AlatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alats = Alat::where('id_admin',Auth::user()->id)->get();
        return view('superadmin.alat.index',compact('alats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

       return view('superadmin.alat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         Alat::create($request->all());
        return redirect('alat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Alat  $alat
     * @return \Illuminate\Http\Response
     */
    public function show(Alat $alat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Alat  $alat
     * @return \Illuminate\Http\Response
     */
    public function edit(Alat $alat)
    {
        return view('superadmin.alat.edit',compact('alat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Alat  $alat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alat $alat)
    {
        $alat->update($request->all());
        return redirect('alat/'.$alat->id.'/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Alat  $alat
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $Alat = Alat::find($id);
        Alat::destroy($Alat->id);
        return redirect('alat'); 
    }
}
