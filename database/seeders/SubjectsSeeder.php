<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->insert(['code' => '1','active'=>'1','ar_name' => 'اللغة العربية','en_name' => '','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
        DB::table('subjects')->insert(['code' => '2','active'=>'1','ar_name' => 'لغتي الجميلة','en_name' => '','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
        DB::table('subjects')->insert(['code' => '3','active'=>'1','ar_name' => 'التربية الاسلامية','en_name' => '','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
        DB::table('subjects')->insert(['code' => '4','active'=>'1','ar_name' => 'الثقافة الاسلامية','en_name' => '','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
        DB::table('subjects')->insert(['code' => '5','active'=>'1','ar_name' => 'اللغة الانجليزية','en_name' => '','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
        DB::table('subjects')->insert(['code' => '6','active'=>'1','ar_name' => 'المهارات الانجليزية','en_name' => '','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
        DB::table('subjects')->insert(['code' => '7','active'=>'1','ar_name' => 'الدراسات الاجتماعية','en_name' => '','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
        DB::table('subjects')->insert(['code' => '8','active'=>'1','ar_name' => 'هذا وطني','en_name' => '','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
        DB::table('subjects')->insert(['code' => '9','active'=>'1','ar_name' => 'الاجتماعيات','en_name' => '','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
        DB::table('subjects')->insert(['code' => '10','active'=>'1','ar_name' => 'الرياضيات','en_name' => '','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
        DB::table('subjects')->insert(['code' => '11','active'=>'1','ar_name' => 'الرياضيات التطبيقية','en_name' => '','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
        DB::table('subjects')->insert(['code' => '12','active'=>'1','ar_name' => 'الرياضيات البحتة','en_name' => '','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
        DB::table('subjects')->insert(['code' => '13','active'=>'1','ar_name' => 'الرياضيات الاساسية','en_name' => '','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
        DB::table('subjects')->insert(['code' => '14','active'=>'1','ar_name' => 'الرياضيات المتقدمة','en_name' => '','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
        DB::table('subjects')->insert(['code' => '15','active'=>'1','ar_name' => 'علوم','en_name' => '','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
        DB::table('subjects')->insert(['code' => '16','active'=>'1','ar_name' => 'فيزياء','en_name' => '','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
        DB::table('subjects')->insert(['code' => '17','active'=>'1','ar_name' => 'احياء','en_name' => '','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
        DB::table('subjects')->insert(['code' => '18','active'=>'1','ar_name' => 'كيمياء','en_name' => '','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
        DB::table('subjects')->insert(['code' => '19','active'=>'1','ar_name' => 'علوم تطبيقية','en_name' => '','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
        DB::table('subjects')->insert(['code' => '20','active'=>'1','ar_name' => 'رياضة مدرسية','en_name' => '','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
        DB::table('subjects')->insert(['code' => '21','active'=>'1','ar_name' => 'المهارات الرياضية','en_name' => '','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
        DB::table('subjects')->insert(['code' => '22','active'=>'1','ar_name' => 'تقنية المعلومات','en_name' => '','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
        DB::table('subjects')->insert(['code' => '23','active'=>'1','ar_name' => 'مصادر التعلم','en_name' => '','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
        DB::table('subjects')->insert(['code' => '24','active'=>'1','ar_name' => 'الحاسوب في العليم','en_name' => '','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
        DB::table('subjects')->insert(['code' => '25','active'=>'1','ar_name' => 'الحاسوب','en_name' => '','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
        DB::table('subjects')->insert(['code' => '26','active'=>'1','ar_name' => 'المهارات الموسيقية','en_name' => '','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
        DB::table('subjects')->insert(['code' => '27','active'=>'1','ar_name' => 'الموسيقى','en_name' => '','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
        DB::table('subjects')->insert(['code' => '28','active'=>'1','ar_name' => 'الفنون التشكيلية','en_name' => '','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
        DB::table('subjects')->insert(['code' => '29','active'=>'1','ar_name' => 'الرسم','en_name' => '','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
        DB::table('subjects')->insert(['code' => '30','active'=>'1','ar_name' => 'المهارات الحياتية','en_name' => '','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
        DB::table('subjects')->insert(['code' => '31','active'=>'1','ar_name' => 'ديني قيمي','en_name' => '','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
        
    }
}
