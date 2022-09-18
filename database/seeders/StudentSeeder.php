<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            ['name' => "John doe", 'status' => 'HIGHTSCHOOL'],
            ['name' => "Pual Nano", 'status' => 'COLLEGE'],
            ['name' => "David Rean", 'status' => 'UNIVERSITY']
        ]);
    }
}
