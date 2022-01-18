<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Model\Tks;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          User::create([             
            'username' => 'admin',             
            'email' => 'admin@gmail.com',             
            'password' => Hash::make('admin@gmail.com'),
             'is_permission'=> '1'
          ]); 
         
 
    }
}
