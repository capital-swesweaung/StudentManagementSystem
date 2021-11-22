<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MuserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $muser=[
            ['user_name'=>'swe swe','mailaddress'=>'capital.swesweaung@gmail.com','address'=>'Lathar','ph_no'=>'09794953135','password'=>bcrypt('12345678')],
            ['user_name'=>'Poe Phyu','mailaddress'=>'poephyu23@jp','address'=>'tokyo','ph_no'=>'097888888','password'=>bcrypt('12345678')],
       
            ['user_name'=>'John Milk','mailaddress'=>'johnmilk123@jp','address'=>'tokyo','ph_no'=>'097888888','password'=>bcrypt('12345678')],
            ['user_name'=>'Rosy Lnn','mailaddress'=>'rosy22@jp','address'=>'tokyo','ph_no'=>'097888888','password'=>bcrypt('12345678')],
           
        ];

        DB::Table('m_user')->insert($muser);
    }
}
