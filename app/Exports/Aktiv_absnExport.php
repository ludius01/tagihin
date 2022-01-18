<?php

namespace App\Exports;

use App\Model\Aktiv_absn;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
class Aktiv_absnExport implements FromCollection , WithHeadings
{
     
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
            return Aktiv_absn::all();
    }

    public function headings(): array
        {
            //Put Here Header Name That you want in your excel sheet 
            return [
               'id','id_user','tanggal','lokasi','nama_aktivitas','lama_aktivitas','tugas','materi','keterangan','hasil_keg','foto','absen','created_at','update_at'
            ];
        }
}
