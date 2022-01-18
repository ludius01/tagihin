<?php

namespace App\Exports;

use App\Model\Kunjungan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class KunjunganExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
            return Kunjungan::all();
    }

    public function headings(): array
    {
        //Put Here Header Name That you want in your excel sheet 
        return [
            'id', 'id_user','tanggal','nama_peserta','jenis_usaha','kondisi_usaha','video','foto','created_at','update_at'
        ];
    }
}
