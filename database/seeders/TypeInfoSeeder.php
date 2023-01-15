<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TypeInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_infos')->insert(['code' => '1','active'=>'1','ar_name' => 'نشاط','en_name' => '','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
        DB::table('type_infos')->insert(['code' => '2','active'=>'1','ar_name' => 'اختبار','en_name' => '','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
        DB::table('type_infos')->insert(['code' => '3','active'=>'1','ar_name' => 'سؤال قصير','en_name' => '','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
        DB::table('type_infos')->insert(['code' => '4','active'=>'1','ar_name' => 'اختبار قصير','en_name' => '','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
        DB::table('type_infos')->insert(['code' => '5','active'=>'1','ar_name' => 'شرح فيديو','en_name' => '','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
        DB::table('type_infos')->insert(['code' => '6','active'=>'1','ar_name' => 'شرح من موقع','en_name' => '','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
        DB::table('type_infos')->insert(['code' => '7','active'=>'1','ar_name' => 'شرح يوتيوب','en_name' => '','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
        DB::table('type_infos')->insert(['code' => '8','active'=>'1','ar_name' => 'انشطة تفاعلية','en_name' => '','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
        DB::table('type_infos')->insert(['code' => '9','active'=>'1','ar_name' => 'دعوة','en_name' => '','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
        
    }
}
