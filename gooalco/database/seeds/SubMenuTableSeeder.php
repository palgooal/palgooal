<?php

use Illuminate\Database\Seeder;

class SubMenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sub_menus')->insert([
            'name_ar'=>"باقات الاستضافة Linux",
            'name_en'=>"Linux Hosting Packages",
            'url'=>"/pages/linux-hosting-packages",
            'number'=>"0",
            'menu_id'=>"2",
        ]);
        DB::table('sub_menus')->insert([
            'name_ar'=>"موزع خدمة (Reseller)",
            'name_en'=>"Reseller",
            'url'=>"#",
            'number'=>"1",
            'menu_id'=>"2",
        ]);
        DB::table('sub_menus')->insert([
            'name_ar'=>"استضافة WordPress",
            'name_en'=>"WordPress Hosting",
            'url'=>"#",
            'number'=>"2",
            'menu_id'=>"2",
        ]);
        DB::table('sub_menus')->insert([
            'name_ar'=>"التذاكر",
            'name_en'=>"Tickets",
            'url'=>"https://clientgooal.palgooal.com/supporttickets.php",
            'number'=>"1",
            'menu_id'=>"7",
        ]);
        DB::table('sub_menus')->insert([
            'name_ar'=>"فتح تذكرة",
            'name_en'=>"Open Ticket",
            'url'=>"https://clientgooal.palgooal.com/submitticket.php?step=2&deptid=1",
            'number'=>"0",
            'menu_id'=>"7",
        ]);
        DB::table('sub_menus')->insert([
            'name_ar'=>"إدارة الدومينات",
            'name_en'=>"My Domains",
            'url'=>"https://clientgooal.palgooal.com/clientarea.php?action=domains",
            'number'=>"0",
            'menu_id'=>"3",
        ]);
        DB::table('sub_menus')->insert([
            'name_ar'=>"تجديد النطاقات",
            'name_en'=>"Domain Renewals",
            'url'=>"https://clientgooal.palgooal.com/cart.php?gid=renewals",
            'number'=>"1",
            'menu_id'=>"3",
        ]);
        DB::table('sub_menus')->insert([
            'name_ar'=>"تسجيل نطاق جديد",
            'name_en'=>"Register a New Domain",
            'url'=>"https://clientgooal.palgooal.com/cart.php?a=add&domain=register",
            'number'=>"2",
            'menu_id'=>"3",
        ]);
        DB::table('sub_menus')->insert([
            'name_ar'=>"نقل النطاق إلينا",
            'name_en'=>"Transfer in a Domain",
            'url'=>"https://clientgooal.palgooal.com/cart.php?a=add&domain=transfer",
            'number'=>"3",
            'menu_id'=>"3",
        ]);
        DB::table('sub_menus')->insert([
            'name_ar'=>"شهادات الحماية SSL",
            'name_en'=>"SSL CERTIFICATES",
            'url'=>"/pages/ssl-certificates",
            'number'=>"0",
            'menu_id'=>"2",
        ]);

    }
}
