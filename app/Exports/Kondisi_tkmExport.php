<?php

namespace App\Exports;

use App\Model\Kondisi_tkm;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class Kondisi_tkmExport implements FromCollection , WithHeadings
{
     
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
            return Kondisi_tkm::all();
    }

    public function headings(): array
    {
        return [
      'id',  'id_user','nama_peserta','nama_usaha','jenis_usaha','lama_usaha','jml_produksi','omzet','media_promo','area_pemasaran','jml_pekerja','bidang_permasalahan','uraian_masalah','pemecahan_masalah','created_at','update_at'
        ];
    }
}
