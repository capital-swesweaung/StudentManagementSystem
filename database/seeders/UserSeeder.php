<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// use App\Models\User;
use Illuminate\Support\Facades\DB;



class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   
    public function run()
    {
        //
        // User::create([
        //     'name' => 'John Milk',
        //     'email'=> 'John123@jp',
        //     'password'=>bcrypt('12345678')
        // ]);
        $user =[
            ['name' => 'John Milk','email'=> 'John123@jp','password'=>bcrypt('12345678')]
        ];
        DB::Table('users')->insert($user);
    }
}
