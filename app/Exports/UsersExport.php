<?php

namespace App\Exports;

use App\User;
use App\Model\Tks;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\FromCollection;

use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\DB;

class UsersExport implements FromCollection , WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Tks::all();
        }

    public function headings(): array
    {
        //Put Here Header Name That you want in your excel sheet 
        return [
         'id','id_user','nik','nama_lengkap','p_terakhir','alamat','provinsi','kabupaten','no_hp','email','pmp','mmp','peran','foto','created_at','update_at'
        ];
    }
}
