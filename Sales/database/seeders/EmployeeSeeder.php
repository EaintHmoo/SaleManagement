<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('employees')->insert([
            ['name'=>'David',
            'email'=>'david@gmail.com',
            'address'=>'America',
            'dob'=>'2000-1-1'],
            ['name'=>'Brena',
            'email'=>'brena@gmail.com',
            'address'=>'America',
            'dob'=>'1998-1-1'],
            ['name'=>'Ran',
            'email'=>'ran@gmail.com',
            'address'=>'England',
            'dob'=>'1997-1-1']
        ]);
    }
}
