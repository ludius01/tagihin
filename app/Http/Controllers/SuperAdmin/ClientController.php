<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Hash;
use Auth;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pagination = 10;
        // return Auth::user()->id;
        $users = User::where('up_liner_id',Auth::user()->id)->paginate(10);
        return view('superadmin.client.index',compact('users'))->with('i', ($request->input('page', 1) - 1) * $pagination);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('superadmin.client.create');
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
         User::create([
             'username' => $request->username ,
             'password' => Hash::make($request->password),
             'email' => $request->email,
             'alamat' => $request->alamat,
             'No_Hp' => $request->No_Hp,
             'status' => $request->status,
             'is_permission' => $request->is_permission,
             'up_liner_id' => Auth::user()->id,
         ]);
         return redirect('client');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::find($id);
        // return $users;
        return view('superadmin.client.edit',compact('users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // return $request;
        $user= User::find($id);
        $user->update([
             'username' => $request->username ,
             'email' => $request->email,
             'alamat' => $request->alamat,
             'No_Hp' => $request->No_Hp,
             'status' => $request->status,
             'is_permission' => $request->is_permission,
        ]);

        return redirect('client/'.$id.'/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        User::destroy($user->id);
        return redirect('client');
    }
}
