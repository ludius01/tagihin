<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Model\Tagihan;
use App\Model\Alat;
use App\User;
use App\Model\Paket;
use App\Model\Pembayaran;
use Illuminate\Http\Request;
use Auth;
use PDF;

class TagihanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
         public function index()
    {            
        $tagihans = Tagihan::with('users')->where('id_admin',Auth::user()->id)->get();
        $pembayarans = Pembayaran::with('tagihan')->where('id_admin',Auth::user()->id)->get();
        // return $pembayarans;
        return view('superadmin.invoice.index',compact('tagihans','pembayarans'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jumlah = Paket::all()->max('id');
        $tagihan = Tagihan::all()->max('id');
        $a = $jumlah+ 1;
        $b = $tagihan + 1;
        $kode =sprintf(date('d').date('m').date('y')."%05s",$b.$a);
        $unik= substr($b,-3);
        $unik_kode = sprintf("%03s",$unik);
        $alats = Alat::all();
        $pakets = Paket::all();
        $pelanggans = User::where('is_permission',2)->where('up_liner_id',Auth::user()->id)->get();
        return view('superadmin.invoice.create',compact('alats','pakets','pelanggans','kode','unik_kode'));
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
        $jumlah_bayar = $request->jumlah_tagihan + $request->kode_unik;
        // return $jumlah_bayar;
        Tagihan::create([
            'no_inv_tagihan' => $request->no_inv_tagihan,
            'tgl_tagihan' => $request-> tgl_tagihan,
            'periode_tahun' => date('Y') ,
            'id_pelanggan' => $request->id_pelanggan ,
            'id_alat' => $request->id_alat ,
            'id_paket' => $request->id_paket ,
            'jumlah_bayar' => $jumlah_bayar,
            'kode_unik' => $request->kode_unik ,
            'status' => $request->status ,
            'id_admin' => Auth::user()->id,
        ]);
        return redirect('invoice');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Tagihan  $tagihan
     * @return \Illuminate\Http\Response
     */
    public function show(Tagihan $tagihan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Tagihan  $tagihan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // return $id;
        $tagihan = Tagihan::find($id);
        $alats = Alat::all();
        $pakets = Paket::all();
        $pelanggans = User::where('is_permission',2)->where('up_liner_id',Auth::user()->id)->get();
        return view('superadmin.invoice.edit',compact('tagihan','pelanggans','pakets','alats'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Tagihan  $tagihan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // return $id;
        $tagihan = Tagihan::find($id);
        if($request->jumlah_bayar == $tagihan->jumlah_bayar){
            $bayar = $tagihan->jumlah_bayar;
        }
        else if($request->jumlah_bayar != $tagihan->jumlah_bayar){
            $bayar = $request->jumlah_bayar + $request->kode_unik;
        }
        $tagihan->update([
            'tgl_tagihan' => $request->tgl_tagihan,
            'id_pelanggan' => $request->id_pelanggan,
            'id_alat' => $request->id_alat,
            'id_paket' => $request->id_paket,
            'jumlah_bayar' => $bayar,
            'status' => $request->status,
        ]);

        return redirect('invoice');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Tagihan  $tagihan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $Tagihan = Tagihan::find($id);
        Tagihan::destroy($Tagihan->id);
        return redirect('invoice');
    }

    public function konfirmasi($id){

        $tagihan = Tagihan::find($id);

        $tgl2 = date('Y-m-d', strtotime('+1 month', strtotime($tagihan->tgl_tagihan)));

        $tagihan->update([
            'status' => 1,
        ]);

        $jumlah_bayar = $tagihan->jumlah_bayar - $tagihan->kode_unik;

        $jumlah = Paket::all()->max('id');
        $unik = Tagihan::all()->max('id');
        $a = $jumlah+ 1;
        $b = $unik + 1;
        $kode =sprintf(date('d').date('m').date('y')."%05s",$b.$a);
        $unik= substr($b,-3);
        $unik_kode = sprintf("%03s",$unik);
        
        $jumlah_bayar2 = $jumlah_bayar + $unik_kode;

        // return $jumlah_bayar;

         Tagihan::create([
            'no_inv_tagihan' => $kode,
            'tgl_tagihan' => $tgl2,
            'periode_tahun' => date('Y') ,
            'id_pelanggan' => $tagihan->id_pelanggan ,
            'id_alat' => $tagihan->id_alat ,
            'id_paket' => $tagihan->id_paket ,
            'jumlah_bayar' => $jumlah_bayar2,
            'kode_unik' => $unik_kode,
            'status' => 2 ,
            'id_admin' => Auth::user()->id,
        ]);


        return redirect('invoice');
    }

        public function index_bulanan(){

            $tagihan = Tagihan::all();
            foreach($tagihan as $tagih){
           $a[] = date('Y', strtotime($tagih->tgl_tagihan));
            }
            $tahun = array_unique($a);
            
            return view('superadmin.laporan_tagihan.index_bulanan',compact('tahun'));
        }


        public function pilih_bulanan(Request $request){
            // return $request;
             $tagihan = Tagihan::all();
            foreach($tagihan as $tagih){
            $a[] = date('Y', strtotime($tagih->tgl_tagihan));
            }
            $tahun = array_unique($a);

            $alats = Alat::all();
            $pakets = Paket::all();
            $pelanggans = User::all();
            $datas = Tagihan::whereYear('tgl_tagihan',$request->tahun)
            ->whereMonth('tgl_tagihan',$request->bulan)
            ->where('id_admin',Auth::user()->id)->get();
           $bulan = $request->bulan;
           $th = $request->tahun;
            
            return view('superadmin.laporan_tagihan.index_bulanan',compact('tahun','datas','bulan','th','pelanggans','alats','pakets'));
        }

        public function print($bulan,$th){
            // return $th;
            $datas = Tagihan::whereYear('tgl_tagihan',$th)
            ->whereMonth('tgl_tagihan',$bulan)
            ->where('id_admin',Auth::user()->id)->get();
            $alats = Alat::all();
            $pakets = Paket::all();
            $pelanggans = User::all();
            // return $datas;

            $pdf = PDF::loadview('superadmin.laporan_tagihan.print_bulanan',compact('datas','pelanggans','alats','pakets','th','bulan'));
	        return $pdf->download('laporan-tagihan bulan '.$bulan.' tahun '.$th);
        }

        public function index_tahunan(){
             $tagihan = Tagihan::all();
            foreach($tagihan as $tagih){
           $a[] = date('Y', strtotime($tagih->tgl_tagihan));
            }
            $tahun = array_unique($a);
            
            return view('superadmin.laporan_tagihan.index_tahun',compact('tahun'));

        }

         public function pilih_tahunan(Request $request){
            // return $request;
             $tagihan = Tagihan::all();
            foreach($tagihan as $tagih){
            $a[] = date('Y', strtotime($tagih->tgl_tagihan));
            }
            $tahun = array_unique($a);

            $alats = Alat::all();
            $pakets = Paket::all();
            $pelanggans = User::all();
            $datas = Tagihan::whereYear('tgl_tagihan',$request->tahun)
            ->where('id_admin',Auth::user()->id)->get();
           $th = $request->tahun;
            
            return view('superadmin.laporan_tagihan.index_tahun',compact('tahun','datas','th','pelanggans','alats','pakets'));
        }

         public function print_tahun($th){
            // return $th;
            $datas = Tagihan::whereYear('tgl_tagihan',$th)
            ->where('id_admin',Auth::user()->id)->get();
            $alats = Alat::all();
            $pakets = Paket::all();
            $pelanggans = User::all();
            // return $datas;

            $pdf = PDF::loadview('superadmin.laporan_tagihan.print_tahunan',compact('datas','pelanggans','alats','pakets','th'));
	        return $pdf->download('laporan-tagihan tahun '.$th);
        }

}
