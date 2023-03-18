<?php

namespace Database\Seeders;

use App\Models\Color;
use App\Models\Div;
use App\Models\Text;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DivsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Color::create(['color_number' => '#252b36', 'created_at' => now(), 'updated_at' => now()]);
        Color::create(['color_number' => '#ffffff', 'created_at' => now(), 'updated_at' => now()]);
        Div::create(['name' => 'navbar', 'color_id' => '1', 'created_at' => now(), 'updated_at' => now(), 'content' => 'null', 'image' => 'null', 'href' => 'null']);
        Div::create(['name' => 'logo', 'color_id' => '2', 'created_at' => now(), 'updated_at' => now(), 'content' => 'null', 'image' => '1679147264image.jpg', 'href'=>'null']);
        Div::create(['name' => 'note', 'color_id' => '1', 'created_at' => now(), 'updated_at' => now(), 'content' => 'null', 'image' => 'null', 'href'=>'null']);
        Div::create(['name' => 'options', 'color_id' => '1', 'created_at' => now(), 'updated_at' => now(), 'content' => 'null', 'image' => 'null', 'href'=>'null']);
        Div::create(['name' => 'زر الارسال', 'color_id' => '1', 'created_at' => now(), 'updated_at' => now(), 'content' => 'ارسال', 'image' => 'null', 'href'=>'null']);
        Div::create(['name' => 'صفحة الفيس الاولى', 'color_id' => '1', 'created_at' => now(), 'updated_at' => now(), 'content' => 'null', 'image' => 'null', 'href'=>'https://www.facebook.com/mos3dat3ajel/?ref=page_internal']);
        Div::create(['name' => 'صفحة الفيس الثانية', 'color_id' => '1', 'created_at' => now(), 'updated_at' => now(), 'content' => 'null', 'image' => 'null', 'href'=>'https://www.facebook.com/d3m.faker']);
        Div::create(['name' => 'الحقوق', 'color_id' => '2', 'created_at' => now(), 'updated_at' => now(), 'content' => 'null', 'image' => 'null', 'href'=> 'null']);
        Div::create(['name' => 'الفوتر', 'color_id' => '1', 'created_at' => now(), 'updated_at' => now(), 'content' => 'null', 'image' => 'null', 'href'=>'null']);
        Div::create(['name' => 'google analytics', 'color_id' => '2', 'created_at' => now(), 'updated_at' => now(), 'content' => 'null', 'image' => 'null', 'href'=> 'null']);
        Div::create(['name' => 'his', 'color_id' => '2', 'created_at' => now(), 'updated_at' => now(), 'content' => 'null', 'image' => 'null', 'href'=>'null']);
        Div::create(['name' => 'manualAd', 'color_id' => '2', 'created_at' => now(), 'updated_at' => now(), 'content' => 'null', 'image' => '1679076321image.jpg', 'href'=> 'null']);
        Div::create(['name' => 'rulesMessage', 'color_id' => '2', 'created_at' => now(), 'updated_at' => now(), 'content' => 'اضغط على زر الواتساب الموجود في الأسفل وارسل الرسالة لـ 25 شخص او مجموعات مقسمين علي 5 مرات كل مرة بـ 5 اشخاص او 5 مجموعات على الـ WhatsApp ليتم تأكيد طلبك في رسالة على الواتساب', 'image' => 'null', 'href'=> 'null']);
        Div::create(['name' => 'facebookMessage', 'color_id' => '2', 'created_at' => now(), 'updated_at' => now(), 'content' => 'null', 'image' => 'https://sp.palfornews.com', 'href'=>'https://www.facebook.com/d3m.faker']);
        Div::create(['name' => 'whatsappMessage', 'color_id' => '2', 'created_at' => now(), 'updated_at' => now(), 'content' => 'null', 'image' => 'https://sp.palfornews.com', 'href'=>'https://www.facebook.com/d3m.faker']);
        Div::create(['name' => 'telegramMessage', 'color_id' => '2', 'created_at' => now(), 'updated_at' => now(), 'content' => 'null', 'image' => 'https://sp.palfornews.com', 'href'=> 'https://www.facebook.com/d3m.faker']);
        Div::create(['name' => 'confirmBtn', 'color_id' => '1', 'created_at' => now(), 'updated_at' => now(), 'content' => 'الذهاب لصفحة التحقق من الطلب', 'image' => 'null', 'href'=>'null']);
        Div::create(['name' => 'faceBookComment', 'color_id' => '1', 'created_at' => now(), 'updated_at' => now(), 'content' => 'null', 'image' => 'null', 'href'=>'null']);
        Div::create(['name' => 'final_text1', 'color_id' => '1', 'created_at' => now(), 'updated_at' => now(), 'content' => 'تم تسجيل طلبك بنجاح يرجي انتظار الرسالة وإتباع الخطوات للإستلام', 'image' => 'null', 'href'=> 'null']);
        Div::create(['name' => 'final_text2', 'color_id' => '1', 'created_at' => now(), 'updated_at' => now(), 'content' => 'تأسست هيئة الهلال الأحمر لدولة الإمارات العربية المتحدة في 1983/1/31 ونالت الاعتراف الدولي باعتبارها العضو الأحمر والصليب الأحمر بتاريخ 1986/8/27.', 'image' => 'null', 'href'=>'null']);
        Div::create(['name' => 'final_text3', 'color_id' => '1', 'created_at' => now(), 'updated_at' => now(), 'content' => 'تولى سمو الشيخ حمدان بن زايد آل نهيان، منصب رئيس مجلس إدارة الهلال الأحمر عام 1986 ثم رئيساً للهيئة عام 1993 مما أعطى قوة دافعة لجهود الهيئة الإنسانية .', 'image' => 'null', 'href'=> 'null']);
        Div::create(['name' => 'final_text4', 'color_id' => '1', 'created_at' => now(), 'updated_at' => now(), 'content' => 'وفي عام 1997 تعزز دور الهيئة بقبول سمو الشيخة فاطمة بنت مبارك لمنصب الرئيسة الفخرية للهلال الأحمر الإماراتي . وفي عام 2001 تم اختيار الهلال الأحمر الإماراتي ثاني أفضل هيئة إنسانية على مستوى قارة آسيا ....', 'image' => 'null', 'href'=> 'null']);
        Div::create(['name' => 'final_text5', 'color_id' => '1', 'created_at' => now(), 'updated_at' => now(), 'content' => 'تأتي هذه المساعدات مع دخول العام شهر رمضان الكريم، حيث تسعى هيئة الهلال الأحمر الإماراتي لمواصلة جهودها المبذولةمن أجل التخفيف من معاناة الأسر تجسيداً للنهج الإنساني الذي تقوم به دولة الإمارات، في ظل تفاقم الأوضاع الإنسانية في دول الجوار ', 'image' => 'null', 'href'=>'null']);
        Text::create(['name' => 'سجل الآن', 'color_id' => '2', 'created_at' => now(), 'updated_at' => now(), 'content' => 'سجل الآن لتحصل علي فرصة في برنامج المساعدات المالية الخاصة بمنطقتكم']);
        Text::create(['name' => 'مساعدات للشباب و للأسر', 'color_id' => '2', 'created_at' => now(), 'updated_at' => now(), 'content' => 'مساعدات مالية للشباب وللأسر المتعففة']);
        Text::create(['name' => 'تابع صفحتنا عبر الفيس بوك', 'color_id' => '2', 'created_at' => now(), 'updated_at' => now(), 'content' => 'تابع صفحتنا عبر الفيس بوك لكل يصلك كل جديد عن المساعدات والمنح والكابونات']);
        Text::create(['name' => 'سيقوم فريق البحث الميداني', 'color_id' => '2', 'created_at' => now(), 'updated_at' => now(), 'content' => 'سيقوم فريق البحث الميداني الخاص بالجمعية بالتواصل عبر أرقامكم المرسلة ومناطق سكنكم لدراسة الحالة وتقييمها']);
        Text::create(['name' => 'الرجاء الإجابة', 'color_id' => '2', 'created_at' => now(), 'updated_at' => now(), 'content' => 'الرجاء الإجابة على الأسئلة التالية في الاسفل']);
    }
}
