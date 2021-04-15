<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;
class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $useradmin =User::create([
           'name'=>'admin',
           'email' =>'adminpro@gmail.com',
           'password'=>Hash::make('barely22'),
           'fullacces'=>'yes'


        ]); 
        $user1 =User::create([
            'name'=>'hugo',
            'email' =>'al221911926@gmail.com',
            'password'=>Hash::make('pollo13'),
            'fullacces'=>'no'
 
 
         ]);


    }
}
