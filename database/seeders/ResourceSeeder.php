<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ResourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resources')->insert(['code' => '1','active'=>'1','ar_name' => 'روابط مواقع','en_name' => 'Web Link','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
        DB::table('resources')->insert(['code' => '2','active'=>'1','ar_name' => 'صور','en_name' => 'Picture','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
        DB::table('resources')->insert(['code' => '3','active'=>'1','ar_name' => 'فيديو','en_name' => 'Vido','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
        DB::table('resources')->insert(['code' => '4','active'=>'1','ar_name' => 'بي دي أف','en_name' => 'PDF','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
        DB::table('resources')->insert(['code' => '5','active'=>'1','ar_name' => 'باور بوينت','en_name' => 'PowerPoint','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
        DB::table('resources')->insert(['code' => '6','active'=>'1','ar_name' => 'وورد','en_name' => 'Word','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
        DB::table('resources')->insert(['code' => '7','active'=>'1','ar_name' => 'يوتيوب','en_name' => 'Youtube','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);

    }
}
