<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('semesters')->insert(['code' => '1','active'=>'1','ar_name' => 'الفصل الدراسي الأول','en_name' => 'First Semester','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
        DB::table('semesters')->insert(['code' => '2','active'=>'1','ar_name' => 'الفصل الدراسي الثاني','en_name' => 'Second Semester','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
        
    }
}
