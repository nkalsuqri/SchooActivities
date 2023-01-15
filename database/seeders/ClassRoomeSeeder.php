<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ClassRoomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('class_roomes')->insert(['code' => '5','active'=>'1','ar_name' => 'الخامس','en_name' => 'Five','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
        DB::table('class_roomes')->insert(['code' => '6','active'=>'1','ar_name' => 'السادس','en_name' => 'Sex','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
        DB::table('class_roomes')->insert(['code' => '7','active'=>'1','ar_name' => 'السابع','en_name' => 'Seven','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
        DB::table('class_roomes')->insert(['code' => '8','active'=>'1','ar_name' => 'الثامن','en_name' => 'Eight','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
        DB::table('class_roomes')->insert(['code' => '9','active'=>'1','ar_name' => 'التاسع','en_name' => 'Nine','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
        DB::table('class_roomes')->insert(['code' => '10','active'=>'1','ar_name' => 'العاشر','en_name' => 'Ten','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
        DB::table('class_roomes')->insert(['code' => '11','active'=>'1','ar_name' => 'الحادي عشر','en_name' => 'Eleven','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
        DB::table('class_roomes')->insert(['code' => '12','active'=>'1','ar_name' => 'الثاني عشر','en_name' => 'Twilf','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
    }
}
