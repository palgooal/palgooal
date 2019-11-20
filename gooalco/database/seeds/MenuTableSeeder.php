<?php

use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            'name_ar'=>"الرئيسية",
            'name_en'=>"home",
            'url'=>"/",
            'number'=>"0",
            'created_at'=>"2019-10-17 10:51:05",
        ]);
        DB::table('menus')->insert([
            'name_ar'=>"خدماتنا",
            'name_en'=>"Our Services",
            'url'=>"/#",
            'number'=>"2",
            'created_at'=>"2019-10-18 09:37:00",
        ]);
        DB::table('menus')->insert([
            'name_ar'=>"النطاقات",
            'name_en'=>"Domains",
            'url'=>"/#",
            'number'=>"3",
            'created_at'=>"2019-10-18 09:37:40",
        ]);
        DB::table('menus')->insert([
            'name_ar'=>"رسائل قصيرة | SMS",
            'name_en'=>"SMS",
            'url'=>"http://sms.palgooal.com",
            'number'=>"4",
            'created_at'=>"2019-10-17 10:51:05",
        ]);
        DB::table('menus')->insert([
            'name_ar'=>"المدونة",
            'name_en'=>"Blog",
            'url'=>"/Blog",
            'number'=>"5",
            'created_at'=>"2019-10-17 10:51:05",
        ]);
        DB::table('menus')->insert([
            'name_ar'=>"تعرف علينا",
            'name_en'=>"about us",
            'url'=>"/pages/about-us",
            'number'=>"1",
            'created_at'=>"2019-10-17 10:51:05",
        ]);
        DB::table('menus')->insert([
            'name_ar'=>"الدعم الفني",
            'name_en'=>"Support",
            'url'=>"/#",
            'number'=>"6",
            'created_at'=>"2019-10-17 10:51:05",
        ]);
       
    }
}
