<?php

namespace App\Exports;

use App\Model\Tkm;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TkmExport implements FromCollection , WithHeadings
{
     
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
            return Tkm::all();
            // $users = User::join('posts', 'posts.user_id', '=', 'users.id')
            // ->where('users.status', 'active')
            // ->where('posts.status','active')
            // ->get(['users.*', 'posts.descrption']);
    }

    public function headings(): array
    {
        //Put Here Header Name That you want in your excel sheet 
        return [
            'id', 'id_user','nama','nik','usia','id_kab','id_prov','no_hp','ide_p_usaha','b_usaha','created_at','update_at'
        ];
    }
}
