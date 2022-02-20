<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Examination_listSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('examination_lists')->insert([
            'name' => "x",
            'price' => "1000",


        ]);


        DB::table('examination_lists')->insert([
            'name' => "y",
            'price' => "2000",


        ]);


        DB::table('examination_lists')->insert([
            'name' => "z",
            'price' => "3000",


        ]);
    }
}
