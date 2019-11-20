<?php

use Illuminate\Database\Seeder;

class SliderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([
            'body_ar'=>'<h2>أفضل أستضافة <span style="color:#3498db">للمواقع الالكترونية</span><br />
            &nbsp;</h2>
            
            <p>احصل على افضل سرعة لموقع الويب الخاص بك</p>
            
            <p>دون فقدان عملائك لبطء سرعة خدمة الاستضافة</p>',
            'body_en'=>'<h2>The best hosting for <span style="color:#3498db">websites</span></h2>

            <p>Get the best speed for your website without losing<br />
            your customers to the slow pace of your hosting service.</p>',
            'image'=>"slider/3J2WxLi6VETEKJT4dpCnkxDGvr6cWMm5lH6Ru1Wg.jpeg",
            
        ]);
    }
}
