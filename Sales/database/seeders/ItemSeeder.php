<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            ['code'=>'001',
            'name'=>'Stand Fan',
            'type'=>'Electronics'],
            ['code'=>'002',
            'name'=>'Aircon',
            'type'=>'Electronics'],
            ['code'=>'003',
            'name'=>'Cooker',
            'type'=>'Electronics']
        ]);
    }
}
