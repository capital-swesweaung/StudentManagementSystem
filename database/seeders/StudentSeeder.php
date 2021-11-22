<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $student=[
            ['name'=>'Ma Aye Mya ','age'=>'23','course'=>'PHP Laravel 8 Framework ','fee'=>'12500'],
            ['name'=>'Ko Tike Gyi','age'=>'22','course'=>'PHP Laravel 8 Framework ','fee'=>'12500'],
            ['name'=>'Ma Swe Swe','age'=>'21','course'=>'PHP Laravel 8 Framework ','fee'=>'12500'],
        ];

        DB::Table('student')->insert($student);
    }
}
