<?php

use Illuminate\Database\Seeder;

class PageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
            'slug'=>"about-us",
            'title_ar'=>"تعرف علينا",
            'content_ar'=>'<section class="about-page ptb80">
            <div class="container">
            <div class="section-title">
            <h2>من نحن؟</h2>
            <p>نحن سمعته الطيبة الشركة منذ عام 2006</p>
            </div>
            <div class="col-md-6">
            
            <div class="embed-responsive embed-responsive-16by9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/m_DUt2rqjgY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
            </div>
            </div>
            <div class="col-md-6 info-text pt20">
            <p>شركة بال قول هي شركة فلسطينية تعمل في مجال تكنولوجيا المعلومات والدعاية والإعلان والتدريب والاستشارات بمستوي عال وبمساهمة مجموعة من المتخصصين في التكنولوجيا وفي الدعاية والإعلان والتدريب تسعي إلي توفير أفضل الخدمات بجودة عالية ومواكبة التطور التكنولوجي والدعائي عبر متخصصين ذوي كفاءة وخبرة فريدة .حيث يتكون مجلس ادارة الشركة من مجموعة من المستثمرين من ذوي الخبرة والكفاءة العلمية والمهنية المتنوعة، حيث تلقى على عاتقهم مسئولية وضع السياسات العامة للشركة و آليات تنفيذها، و التنسيق مع الجهات المحلية والإقليمية والدولية من اجل تقديم كل ما هو نافع ومفيد لتحقيق أهداف الشركة .
            
            </p>
            
            </div>
            </div>
            </section>
            <section class="ptb40" id="countup">
            <div class="container-fluid">
            
            <div class="col-md-3 col-sm-3 col-xs-12">
            <img src="images/icons/award.svg" alt="">
            <span class="counter" data-from="0" data-to="3"></span>
            <h3>شهادات</h3>
            </div>
            
            
            <div class="col-md-3 col-sm-3 col-xs-12">
            <img src="images/icons/happy.svg" alt="">
            <span class="counter" data-from="0" data-to="750"></span>
            <h3>مشتركين</h3>
            </div>
            
            
            <div class="col-md-3 col-sm-3 col-xs-12">
            <img src="images/icons/site.svg" alt="">
            <span class="counter" data-from="0" data-to="1425"></span>
            <h3>استضافة المواقع</h3>
            </div>
            
            
            <div class="col-md-3 col-sm-3 col-xs-12">
            <img src="images/icons/clock.svg" alt="">
            <span class="counter" data-from="0" data-to="2425"></span>
            <h3>ساعات العمل المنجزة</h3>
            </div>
            </div></section>
            <section class="services-page2 pt80 pb40">
            <div class="container">
            <div class="section-title">
            <h2>مهاراتنا</h2>
            <p>تتمتع شركة بال قول لتكنولوجيا المعلومات بمزيد من المهارات التقنية وتتمثل في  </p>
            </div>
            
            <div class="col-md-6 pt40 pb80">
            
            <div class="skillbar clearfix " data-percent="90%">
            <div class="skillbar-title"><span>الاستضافة</span></div>
            <div class="skillbar-bar"></div>
            <div class="skill-bar-percent">99%</div>
            </div>
            
            
            <div class="skillbar clearfix " data-percent="85%">
            <div class="skillbar-title"><span>التصميم</span></div>
            <div class="skillbar-bar"></div>
            <div class="skill-bar-percent">90%</div>
            </div>
            
            
            <div class="skillbar clearfix " data-percent="75%">
            <div class="skillbar-title"><span>البرمجيات</span></div>
            <div class="skillbar-bar"></div>
            <div class="skill-bar-percent">85%</div>
            </div>
            
            
            <div class="skillbar clearfix " data-percent="55%">
            <div class="skillbar-title"><span>wordpress</span></div>
            <div class="skillbar-bar"></div>
            <div class="skill-bar-percent">90%</div>
            </div>
            
            </div>
            
            
            <div class="col-md-6">
            <div class="col-md-6 col-sm-6 col-xs-6 chart mb40" data-percent="99"><span>الاستضافة</span></div>
            <div class="col-md-6 col-sm-6 col-xs-6 chart mb40" data-percent="90"><span>التصميم</span></div>
            <div class="col-md-6 col-sm-6 col-xs-6 chart mb40" data-percent="85"><span>البرمجيات</span></div>
            <div class="col-md-6 col-sm-6 col-xs-6 chart mb40" data-percent="90"><span>wordpress</span></div>
            </div>
            
            </div>
            </section>',

            'title_en'=>'about us',

            'content_en'=>'<section class="about-page ptb80">
            <div class="container">
            <div class="section-title">
            <h2>who are we?</h2>
            <p>We are a reputed company since 2006</p>
            </div>
            <div class="col-md-6">
            
            <div class="embed-responsive embed-responsive-16by9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/m_DUt2rqjgY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
            </div>
            </div>
            <div class="col-md-6 info-text pt20">
            <p>PALCOOL is a Palestinian company working in the field of information technology, advertising, training and consulting at a high level and the contribution of a group of specialists in technology and advertising and training seeks to provide the best services with high quality and keep abreast of technological development and propaganda through specialists with unique efficiency and experience. From a group of investors with expertise and a variety of scientific and professional competence, where they have the responsibility to develop the general policies of the company and the mechanisms of implementation, and coordination with local, regional and international bodies in order to provide everything that is our Effective and useful to achieve the objectives of the company .
            
            </p>
            
            </div>
            </div>
            </section>
            <section class="ptb40" id="countup">
            <div class="container-fluid">
            
            <div class="col-md-3 col-sm-3 col-xs-12">
            <img src="images/icons/award.svg" alt="">
            <span class="counter" data-from="0" data-to="3"></span>
            <h3>AWARDS</h3>
            </div>
            
            
            <div class="col-md-3 col-sm-3 col-xs-12">
            <img src="images/icons/happy.svg" alt="">
            <span class="counter" data-from="0" data-to="750"></span>
            <h3>Subscribers</h3>
            </div>
            
            
            <div class="col-md-3 col-sm-3 col-xs-12">
            <img src="images/icons/site.svg" alt="">
            <span class="counter" data-from="0" data-to="1425"></span>
            <h3>HOSTED WEBSITES</h3>
            </div>
            
            
            <div class="col-md-3 col-sm-3 col-xs-12">
            <img src="images/icons/clock.svg" alt="">
            <span class="counter" data-from="0" data-to="2425"></span>
            <h3>WORK HOURS</h3>
            </div>
            </div></section>
            <section class="services-page2 pt80 pb40">
            <div class="container">
            <div class="section-title">
            <h2>Our Skills</h2>
            <p>palgooal IT company with more technical skills is represented in </p>
            </div>
            
            <div class="col-md-6 pt40 pb80">
            
            <div class="skillbar clearfix " data-percent="90%">
            <div class="skillbar-title"><span>HOSTED</span></div>
            <div class="skillbar-bar"></div>
            <div class="skill-bar-percent">99%</div>
            </div>
            
            
            <div class="skillbar clearfix " data-percent="85%">
            <div class="skillbar-title"><span>design</span></div>
            <div class="skillbar-bar"></div>
            <div class="skill-bar-percent">90%</div>
            </div>
            
            
            <div class="skillbar clearfix " data-percent="75%">
            <div class="skillbar-title"><span>Software</span></div>
            <div class="skillbar-bar"></div>
            <div class="skill-bar-percent">85%</div>
            </div>
            
            
            <div class="skillbar clearfix " data-percent="55%">
            <div class="skillbar-title"><span>wordpress</span></div>
            <div class="skillbar-bar"></div>
            <div class="skill-bar-percent">90%</div>
            </div>
            
            </div>
            
            
            <div class="col-md-6">
            <div class="col-md-6 col-sm-6 col-xs-6 chart mb40" data-percent="99"><span>HOSTED</span></div>
            <div class="col-md-6 col-sm-6 col-xs-6 chart mb40" data-percent="90"><span>design</span></div>
            <div class="col-md-6 col-sm-6 col-xs-6 chart mb40" data-percent="85"><span>Software</span></div>
            <div class="col-md-6 col-sm-6 col-xs-6 chart mb40" data-percent="90"><span>wordpress</span></div>
            </div>
            
            </div>
            </section>',
          
        ]);
        DB::table('pages')->insert([
            'slug'=>"linux-hosting-packages",
            'title_ar'=>"باقات الاستضافة Linux",
            'content_ar'=>'<style>
            .pricing-table1 .pricing-plan:last-child .price {
                border-radius: 0 3px 0 0 !important;
            }
            .pricing-table1 .pricing-plan:first-child .price {
                border-radius: 3px 0 0 0 !IMPORTANT;
            }
            .pricing-table1 .pricing-plan .price .currency {
                font-size: 24px;
                margin-left: 0px;
                
            }
            .pricing-table1 .pricing-plan {
                background: #fff;
                text-align: center;
                border-left: 1px solid #ecf3f6;
            }
            </style>
            
            <section class="about-page ptb80">
            <div class="container">
            <div class="col-md-6">
            
            <div class="img-fluid">
            <img src="./images/img_hosting_web1-300x214.png">
            </div>
            </div>
            <div class="col-md-6 info-text pt20">
            <h2>هل هذا لك</h2>
            <p>سواء كنت تعرف شيئًا أو اثنين حول إنشاء موقع ويب ، أو كنت مبتدئًا كاملاً ، فلدينا خطة استضافة لك. أنشئ موقعك من نقطة الصفر أو استمتع بإعداد WordPress السهل ، وتحليلات الويب المدمجة ، والنسخ الاحتياطي الآلي ، والأمن الصخري.</p>
            </div>
            </div>
            </section>
            
            <section class="pricing-page1 ptb80">
            <div class="container">
            
            <div class="row">
            <div class="section-title">
            <h2>اختر خطط الاستضافة الخاصة بك</h2>
            <p>باقات استضافة مختلفة لتناسب كل الاحتياجات</p>
            </div>
            
            <div class="pricing-table1">
            
            <div class="col-sm-3 pricing-plan" id="starter">
            
            <div class="row price">
            <div class="priceing">
            <span class="currency">$</span>
            <span class="amount">12</span>
            <span class="month">سنة</span>
            </div>
            </div>
            
            <div class="plan-type">
            <span>الباقة 500</span>
            </div>
            
            <ul class="nav">
            <li>مساحة القرص 500 MB</li>
            <li>معدل نقل البيانات 50 GB</li>
            <li>عدد قواعد البيانات غير محدود</li>
            <li>عدد حسابات البريد الإلكتروني غير محدود</li>
            <li>عدد الموقع غير محدود</li>
            <li>النسخ الاحتياطي قاعدة البيانات / استعادة</li>
            </ul>
            <a href="https://clientgooal.palgooal.com/cart.php?a=add&amp;pid=14" class="btn btn-border btn-blue">اطلبه الان</a>
            
            </div>
            
            
            <div class="col-sm-3 pricing-plan" id="basic">
            
            <div class="row price">
            <div>
            <span class="currency">$</span>
            <span class="amount">41.66</span>
            <span class="month">سنة</span>
            </div>
            </div>
            
            <div class="plan-type">
            <span>الباقة 1000</span>
            </div>
            
            <ul class="nav">
            <li>مساحة القرص 1000 MB</li>
            <li>معدل نقل البيانات 80 GB</li>
            <li>عدد قواعد البيانات غير محدود</li>
            <li>عدد حسابات البريد الإلكتروني غير محدود</li>
            <li>عدد الموقع غير محدود</li>
            <li>النسخ الاحتياطي قاعدة البيانات / استعادة</li>
            </ul>
            <a href="https://clientgooal.palgooal.com/cart.php?a=add&amp;pid=12" class="btn btn-border btn-blue">اطلبه الان</a>
            
            </div>
            
            
             <div class="col-sm-3 pricing-plan" id="agency">
            
            <div class="row price">
            <div>
            <span class="currency">$</span>
            <span class="amount">69.44</span>
            <span class="month">سنة</span>
            </div>
            </div>
            
            <div class="plan-type">
            <span>الباقة 5000</span>
            </div>
            
            <ul class="nav">
            <li>مساحة القرص 500 MB</li>
            <li>معدل نقل البيانات 150 GB</li>
            <li>عدد قواعد البيانات غير محدود</li>
            <li>عدد حسابات البريد الإلكتروني غير محدود</li>
            <li>عدد الموقع غير محدود</li>
            <li>النسخ الاحتياطي قاعدة البيانات / استعادة</li>
            </ul>
            <a href="https://clientgooal.palgooal.com/cart.php?a=add&amp;pid=13" class="btn btn-border btn-blue">اطلبه الان</a>
            
            </div>
            
            
            <div class="col-sm-3 pricing-plan" id="enterprise">
            
            <div class="row price">
            <div>
            <span class="currency">$</span>
            <span class="amount">138.88</span>
            <span class="month">سنة</span>
            </div>
            </div>
            
            <div class="plan-type">
            <span>الباقة 10000</span>
            </div>
            
            <ul class="nav">
            <li>مساحة القرص 10000 MB</li>
            <li>معدل نقل البيانات 200 GB</li>
            <li>عدد قواعد البيانات غير محدود</li>
            <li>عدد حسابات البريد الإلكتروني غير محدود</li>
            <li>عدد الموقع غير محدود</li>
            <li>النسخ الاحتياطي قاعدة البيانات / استعادة</li>
            </ul>
            <a href="https://clientgooal.palgooal.com/cart.php?a=add&amp;pid=16" class="btn btn-border btn-blue">اطلبه الان</a>
            
            </div>
            
            </div>
            
            </div>
            
            </div>
            </section>',
            'title_en'=>"Linux Hosting Packages",
            'content_en'=>'<section class="about-page ptb80">
            <div class="container">
            <div class="col-md-6">
            
            <div class="img-fluid">
            <img src="./images/img_hosting_web1-300x214.png">
            </div>
            </div>
            <div class="col-md-6 info-text pt20">
            <h2>is it yours</h2>
            <p>Whether you know a thing or two about creating a website, or youre a complete beginner, we have a hosting plan for you. Create your site from scratch or enjoy easy WordPress setup, integrated web analytics, automated backup, and rock security.</p>
            </div>
            </div>
            </section>
            
            <section class="pricing-page1 ptb80">
            <div class="container">
            
            <div class="row">
            <div class="section-title">
            <h2>Choose your hosting plans</h2>
            <p>Different hosting packages to suit all needs</p>
            </div>
            
            <div class="pricing-table1">
            
            <div class="col-sm-3 pricing-plan" id="starter">
            
            <div class="row price">
            <div class="priceing">
            <span class="currency">$</span>
            <span class="amount">12</span>
            <span class="month">Year</span>
            </div>
            </div>
            
            <div class="plan-type">
            <span>Package 500</span>
            </div>
            
            <ul class="nav">
            <li>Disk space is 500 MB</li>
            <li>The data transfer rate is 50 GB</li>
            <li>The number of databases is unlimited</li>
            <li>The number of email accounts is unlimited</li>
            <li>The number of the site is unlimited</li>
            <li>Database backup / restore</li>
            </ul>
            <a href="https://clientgooal.palgooal.com/cart.php?a=add&amp;pid=14" class="btn btn-border btn-blue">purchase</a>
            
            </div>
            
            
            <div class="col-sm-3 pricing-plan" id="basic">
            
            <div class="row price">
            <div>
            <span class="currency">$</span>
            <span class="amount">41.66</span>
            <span class="month">Year</span>
            </div>
            </div>
            
            <div class="plan-type">
            <span>Package 1000</span>
            </div>
            
            <ul class="nav">
            <li>Disk space is 1000 MB</li>
            <li>The data transfer rate is 80 GB</li>
            <li>The number of databases is unlimited</li>
            <li>The number of email accounts is unlimited</li>
            <li>The number of the site is unlimited</li>
            <li>Database backup / restore</li>
            </ul>
            <a href="https://clientgooal.palgooal.com/cart.php?a=add&amp;pid=12" class="btn btn-border btn-blue">purchase</a>
            
            </div>
            
            
             <div class="col-sm-3 pricing-plan" id="agency">
            
            <div class="row price">
            <div>
            <span class="currency">$</span>
            <span class="amount">69.44</span>
            <span class="month">Year</span>
            </div>
            </div>
            
            <div class="plan-type">
            <span>Package 5000</span>
            </div>
            
            <ul class="nav">
            <li>Disk space is 5000 MB</li>
            <li>The data transfer rate is 150 GB</li>
            <li>The number of databases is unlimited</li>
            <li>The number of email accounts is unlimited</li>
            <li>The number of the site is unlimited</li>
            <li>Database backup / restore</li>
            </ul>
            <a href="https://clientgooal.palgooal.com/cart.php?a=add&amp;pid=13" class="btn btn-border btn-blue">purchase</a>
            
            </div>
            
            
            <div class="col-sm-3 pricing-plan" id="enterprise">
            
            <div class="row price">
            <div>
            <span class="currency">$</span>
            <span class="amount">138.88</span>
            <span class="month">Year</span>
            </div>
            </div>
            
            <div class="plan-type">
            <span>Package 10000</span>
            </div>
            
            <ul class="nav">
            <li>Disk space is 10000 MB</li>
            <li>The data transfer rate is 200 GB</li>
            <li>The number of databases is unlimited</li>
            <li>The number of email accounts is unlimited</li>
            <li>The number of the site is unlimited</li>
            <li>Database backup / restore</li>
            </ul>
            <a href="https://clientgooal.palgooal.com/cart.php?a=add&amp;pid=16" class="btn btn-border btn-blue">purchase</a>
            
            </div>
            
            </div>
            
            </div>
            
            </div>
            </section>',

        ]);
        DB::table('pages')->insert([
            'slug'=>"privacy-policy",
            'title_ar'=>"سياسة الاستخدام",
            'content_ar'=>'',
            'title_en'=>"Privacy & Policy",
            'content_en'=>'',

        ]);
        DB::table('pages')->insert([
            'slug'=>"terms-conditions",
            'title_ar'=>"سياسة الخصوصية",
            'content_ar'=>'<div class="about-page ptb80" style="background-color:#f7f7f7">
            <div class="container">
            <div class="section-title">
            <h1><span style="color:#29b2fe">سياسة الخصوصية</span><img alt="privacy_policy" src="./images/privacy_policy.png" style="direction:rtl; float:left; height:150px; width:325px" /></h1>
            </div>
            
            <div class="col-md-8 info-text pt20">
            <p><strong>سياسة الخصوصية في شركة بال قول&nbsp;&nbsp;تضمن لك حماية البيانات والمعلومات الخاصة بك والتي تكون لدينا عند حجزك أي خدمة من خدماتنا والتي تحافظ عليها شركة بال قول&nbsp;ولا تقوم ببيعها أو التصرف فيها أو الكشف عن معلوماتك الشخصية دون موافقتك.</strong></p>
            </div>
            </div>
            </div>
            
            <div class="container ptb30">
            <div class="section-title">
            <h2>سياسة الخصوصية لـ www.palgooal.com</h2>
            
            <p style="text-align:justify">سياسة الخصوصية في شركة بال قول تلزمنا بحماية المعلومات الخاصة بك ، والتي نجمعها ونسترجعها من خلال زيارتك لموقعنا ، ونحن نلتزم بعدم بيعها أو نشرها أو غيرها من الطرق التي تكشف عن معلوماتك الشخصية أو البيانات التعريفية الخاصة بك دون موافقتك . يمكنك تصفح موقعنا دون الكشف عن هويتك ، ودون تقديم أية معلومات شخصية عمَّن تكون ؛ وباستخدام هذا الموقع فأنت توافق على بنود سياسة الخصوصية هذه ( يرجى قراءة سياسة الخصوصية التالية لفهم كيف يتم التعامل مع المعلومات الشخصية الخاصة بك عند استخدام هذا الموقع أو الاستفادة من الخدمات التي يقدمها ) . التالي يوضح تفاصيل عن جمع المعلومات ونشرها . هذا الموقع قد يحتوي وصلات لمواقع أخرى ، تتضمن هذه الوصلات المواقع التي نعتقد أنها مفيدة لكم ، ونخلي مسؤوليتنا عن محتوى هذه المواقع وسياسات الخصوصية الخاصة بها .</p>
            </div>
            </div>
            
            <div class="about-page ptb30" style="background-color:#f7f7f7">
            <div class="container">
            <div class="section-title">
            <h3 style="text-align:right"><span style="color:#29b2fe">تصفح موقعنا :</span></h3>
            </div>
            
            <div class="col-md-12 info-text">
            <p>إذا كنت زائرًا - بحيث تتصفح موقعنا دون إدخال أي بيانات شخصية - فإننا نقوم بجمع وتخزين معلومات معينة حول زيارتك ، هذه المعلومات لا تعرّف بك شخصيًا ، ولن ترتبط بالرد عليك إلا إذا قررت التعريف بنفسك . نحن نقوم بجمع المعلومات التالية عن الزائر :عنوان الـ آي بي ، و نوع المتصفح و نظام التشغيل المستخدم للوصول إلى موقعنا ، و تاريخ و وقت الوصول إلى الموقع ، و الصفحات اللتي تقوم بزيارتها ( من خلال النقر ) على روابطها الموجودة في هذا الموقع و اللتي تنقلك إلى موقع آخر ، و عنوان ذلك الموقع ، إضافة إلى المعلومات المتعلقة بزيارتك.نحن نستخدم عنوان الـ آي بي الخاص بك للمساعدة في تشخيص المشاكل المتعلقة بسيرفر الموقع الخاص بنا ، و لإدارته كذلك.</p>
            </div>
            </div>
            </div>
            
            <div class="about-page ptb30">
            <div class="container">
            <div class="section-title">
            <h3 style="text-align:right"><span style="color:#29b2fe">المعلومات التي يتم جمعها:</span></h3>
            </div>
            
            <div class="col-md-12 info-text">
            <ol dir="rtl">
                <li>
                <p>نجمع&nbsp;عناوين&nbsp;البريد&nbsp;الإلكتروني&nbsp;للعملاء&nbsp;الذين&nbsp;تواصلوا&nbsp;معنا&nbsp;عبر&nbsp;البريد&nbsp;الإلكتروني&nbsp;الخاص&nbsp;بهم.</p>
                </li>
                <li>
                <p>نقوم بجمع المعلومات التي زودنا بها العملاء الذين يستفيدون من منتجاتنا وبرنامجنا ، clientgooal ومجتمع بال قول ، أو خدماتنا الأخرى ما يتضمن المعلومات التالية : ( الاسم ، العنوان ، عنوان البريد الإلكتروني ، رقم الهاتف ، البلد ).</p>
                </li>
                <li>
                <p>لا نجمع معلومات بطاقة الائتمان أو غيرها من المعلومات المالية الحساسة التي يتم استخدامها على موقعنا . بخلاف الشراء عن طريق الحوالات المصرفية والتي نقوم بمعالجتها بشكل مباشر ، فإن جميع عمليات الشراء التي تتم باستخدام بطاقات الائتمان تتم من خلال بوابة شراء موقع الـ PayPal .للحصول على معلومات بشأن بنود سياسة الخصوصية الخاصة بـ PayPal ، يرجى زيارة الرابط التاليwww.paypal.com</p>
                </li>
                <li>
                <p>إذا كان الطلب الخاص بك هو خدمة الدعم الفني أو تركيب البرنامج أو الترقيات ، قد نقوم بجمع بعض المعلومات المطلوبة لتلبية طلبك .</p>
                </li>
                <li>
                <p>خدمات الدعم غالبًا ما تتطلب مشاركتنا بتفاصيل للوصول إلى السيرفر المطلوب ، مثل : اسم المستخدم أو كلمة السر ، وهذه من المعلومات اللازمة للسماح بالوصول للموقع وتأدية الخدمة المطلوبة على أكمل وجه ، وهذا ما يسمح لفريق الدعم الخاص بعملائنا الوصول إلى الخادم الخاص بك أو بلوحة التحكم في النظام لتشخيص مشكلة أو إكمال ترقية أو التثبيت .</p>
                </li>
                <li>
                <p>من خلال الاستفادة من هذه الخدمات يجب إعطاء الإذن لنا ولفريق دعمنا الخاص بعملائنا بتسجيل الدخول إلى موقع الويب الخاص بك أو بالدخول إلى لوحة التحكم ، والتي قد تحتوي على معلومات شخصية .جميع المراسلات الإلكترونية التي ترد إليك ، إما عبر البريد الإلكتروني من عناوين غير شخصية مثل info@palgoal.ps و support@palgoal.ps ، أو عن طريق نظام التذاكر عبر الإنترنت ، يتم تخزينها و الاحتفاظ بها لفترة منذ تاريخ استلامها ، إلى أن يحين الوقت الذي نرى أن المعلومات الواردة بها لم تعد هناك حاجة إليها أو غير مطلوبة من قبل جهات قانونية. وهذه المراسلات مع العملاء ترتبط تلقائياً بحساباتهم .جميع المعلومات المقدمة من قِبل العملاء في أي من الطرق المدرجة أعلاه أو خلاف ذلك تصبح ملكًا لـ palgooal لنستخدمها وفقًا لما هو مسموح به بناء على هذه الاتفاقية .</p>
                </li>
                <li>
                <p>قد نشارك معلوماتك الشخصية مع الشركات المتعاونة معنا من أجل تحديد المنتجات أو الخدمات التي قد تثير اهتمامك ، لتحسين تجربة المستخدم والموقع بشكل عام ، للمشاركة في أبحاث السوق وغير ذلك من الأغراض التجارية الداخلية .</p>
                </li>
                <li>
                <p>يجوز لنا أيضًا جمع المعلومات الشخصية الخاصة بك مع معلومات الآخرين وإعداد تقارير عن استخدام الموقع ، وتاريخ الشراء أو عوامل أخرى للبيع ، أو توزيعها على الآخرين . وهذه التقارير تشمل أية معلومات تعريفية شخصية .</p>
                </li>
                <li>
                <p>قد نستخدم المعلومات الشخصية الخاصة بك من بريد إلكتروني أو وسائل الاتصال بشأن المنتجات أو الخدمات التي نقدمها ، لإرسالها لأطراف ثالثة لنا معها علاقات ، والتي نعتقد أنها قد تكون مهمة بالنسبة لك .</p>
                </li>
                <li>
                <p>نشارك ولا نبيع ولا نقوم بتأجير معلوماتك الشخصية لأطراف ثالثة لأسباب غير معروفة .يمكن لك في أي وقت اختيار عدم استقبال رسائل البريد الإلكتروني الترويجية الخاصة بنا ، وذلك عن طريق تغيير الإعدادات في حساب العميل ، أو عن طريق الاتصال بنا على info@palgoal.ps</p>
                </li>
            </ol>
            
            <p>ورغم ما سبق فقد نقوم بالاتصال بك لغرض إيصال معلومات متعلقة بهذا الموقع ، وكذلك لتسهيل أو إكمال أو تأكيد أي معاملات قد تتعلق بطلبك ، أو الرد على استفساراتك .إذا كنت ترغب بعدم تقديم اسمك أو بريدك الإلكتروني أو العنوان البريدي لأطراف ثالثة لأغراض التسويق المباشر ، يرجى الاتصال بنا على info@palgoal.ps .</p>
            </div>
            </div>
            </div>
            
            <div class="about-page ptb30" style="background-color:#f7f7f7">
            <div class="container">
            <div class="section-title">
            <h3 style="text-align:right"><span style="color:#29b2fe">الكوكيز:</span></h3>
            </div>
            
            <div class="col-md-12 info-text">
            <p>قد نضع ( كوكيز ) على الكمبيوتر الشخصي الخاص بك . ( الكوكيز ) : عبارة عن معرفات صغيرة مرسلة من خادم الموقع يتم تخزينها على القرص الصلب في جهاز الكمبيوتر ، مثل بطاقة الرخصة ، وهي تساعدنا في التعرف عليك إذا قمت بزيارة موقع palgooal.com مرة أخرى ، وهذا الموقع يستعمل الكوكيز لتعقب كيف وجدت هذا الموقع أو المواقع الأخرى مثل عنوان الـ آي بي الخاص بك ، ولا يتم استخدام الكوكيز للحصول على بياناتك الشخصية من القرص الصلب الخاص بك ، أو بريدك الإلكتروني أو أي بيانات شخصية أخرى - حمايةً لخصوصيتك ، كما لا نستخدم الكوكيز لتخزين أو نقل أي معلومات شخصية عنك على شبكة الإنترنت . يمكنك رفض الكوكيز عن طريق تغيير إعدادات المتصفح ، ولكن نرجو أن تكون على علم أنه إذا رفضت الكوكيز في موقعنا فمن الممكن في بعض الصفحات عدم تحميل الموقع بشكل صحيح ، أو عند محاولة وصولك لمعلومات معينة قد يرفض أو قد تحتاج لإدخال معلومات عن نفسك أكثر من مرة .</p>
            </div>
            </div>
            </div>',
            'title_en'=>"Terms & Conditions",
            'content_en'=>'<div class="about-page ptb80" style="background-color:#f7f7f7">
            <div class="container">
            <div class="section-title">
            <h1><span style="color:#29b2fe">Privacy policy</span><img alt="privacy_policy" src="./images/privacy_policy.png" style="direction:rtl; float:right; height:150px; width:325px" /></h1>
            </div>
            
            <div class="col-md-8 info-text pt20">
            <p><strong>PALgoal Privacy Policy ensures that you protect your data and information that we have when you reserve any of our services and that PALgoal does not sell, dispose of, or disclose your personal information without your consent.</strong></p>
            </div>
            </div>
            </div>
            
            <div class="container ptb30">
            <div class="section-title">
            <h2>Privacy policy www.palgooal.com</h2>
            
            <p style="text-align:justify">The Privacy Policy at PalGol makes it obligatory for us to protect your information, which we collect and retrieve by visiting our site, and we are committed not to sell, publish or otherwise disclose your personal information or personally identifiable information without your consent. You may browse our site anonymously, without providing any personal information about who you are; by using this site you agree to the terms of this privacy policy (please read the following privacy policy to understand how your personal information is handled when you use this site or use the services Provided by). The following shows details about the collection and dissemination of information. This site may contain links to other sites. These links include sites that we believe are useful to you, and we disclaim responsibility for the content of these sites and their privacy policies.</p>
            </div>
            </div>
            
            <div class="about-page ptb30" style="background-color:#f7f7f7">
            <div class="container">
            <div class="section-title">
            <h3 dir="rtl" style="text-align:left"><span style="color:#29b2fe">Browse our website:</span></h3>
            </div>
            
            <div class="col-md-12 info-text">
            <p>If you are a visitor - to browse our site without entering any personal data - we collect and store certain information about your visit. We collect the following information about the visitor: the IP address, the type of browser and operating system used to access our site, the date and time of access to the site, and the pages you visit (by clicking) on ​​its links on this site which We use your IP address to help diagnose and manage problems with our web server.</p>
            </div>
            </div>
            </div>
            
            <div class="about-page ptb30">
            <div class="container">
            <div class="section-title">
            <h3 dir="rtl" style="text-align:left"><span style="color:#29b2fe">Information Collected:</span></h3>
            </div>
            
            <div class="col-md-12 info-text">
            <ol>
                <li>
                <p>We collect email addresses of customers who have contacted us via their email.</p>
                </li>
                <li>
                <p>We collect information that we have provided to customers who benefit from our products, software, clientgooal, pal community, or other services including the following information: (name, address, email address, phone number, country).</p>
                </li>
                <li>
                <p>We do not collect credit card information or other sensitive financial information that is used on our site. Unlike purchase via wire transfer, which we process directly, all credit card purchases are made through the PayPal portal. For information on the terms of the PayPal privacy policy, please visit www.paypal.com</p>
                </li>
                <li>
                <p>If your request is a technical support service or software installation or upgrades, we may collect some information required to meet your request.</p>
                </li>
                <li>
                <p>Support services often require us to share details to access the desired server, such as a user name or password. This is necessary information to allow access to the site and perform the required service to the fullest. This allows our customer support team to access your server or control panel. System to diagnose a problem or complete an upgrade or installation.</p>
                </li>
                <li>
                <p>By using these services you must give permission to us and our customer support team to log into your website or to access the control panel, which may contain personal information. All electronic communications received by you, either via email from non-personal addresses such as info@palgoal.ps and support@palgoal.ps, or via the online ticketing system, are stored and maintained for a period from the date of receipt, until such time as we see that the information contained therein is no longer needed or not required by Legal bodies. All correspondence provided by the Customer in any of the ways listed above or otherwise becomes the property of Palgooal for use as permitted by this Agreement.</p>
                </li>
                <li>
                <p>We may share your personal information with companies that collaborate with us in order to identify products or services that may interest you, to improve the user experience and location in general, to participate in market research and other internal business purposes.</p>
                </li>
                <li>
                <p>We may also collect your personal information with others&#39; information and report on the use of the Site, the date of purchase or other factors for sale, or distribute it to others. These reports include any personally identifiable information.</p>
                </li>
                <li>
                <p>We may use your personal information from an email or means of communication regarding our products or services, to send to third parties to us with them relationships, which we believe may be important to you.</p>
                </li>
                <li>
                <p>We share, sell, and do not rent your personal information to third parties for unknown reasons. You may at any time choose not to receive our promotional emails by changing the settings in the customer&#39;s account, or by contacting us at info@palgoal.ps</p>
                </li>
            </ol>
            
            <p>Notwithstanding the foregoing, we may contact you for the purpose of communicating information related to this website, as well as to facilitate, complete or confirm any transactions that may be related to your request, or to respond to your inquiries. If you do not wish to provide your name, email or postal address to third parties for direct marketing purposes, please Contact us at info@palgoal.ps.</p>
            </div>
            </div>
            </div>
            
            <div class="about-page ptb30" style="background-color:#f7f7f7">
            <div class="container">
            <div class="section-title">
            <h3 dir="rtl" style="text-align:left"><span style="color:#29b2fe">Cookies:</span></h3>
            </div>
            
            <div class="col-md-12 info-text">
            <p>We may place cookies on your PC. Cookies are small identifiers sent from the site server that are stored on your computer&#39;s hard drive, such as a license card. They help us identify you if you visit palgooal.com again, and this website uses cookies to track how you found this site or Other sites, such as your IP address, do not use cookies to get your personal data from your hard drive, email or other personal data - to protect your privacy, and we do not use cookies to store or transmit any personal information about you on the Internet . You may refuse cookies by changing your browser settings, but please be aware that if you reject cookies on our site it is possible on some pages that the site does not load properly, or when you try to access certain information you may refuse or you may need to enter information about yourself more than once. .</p>
            </div>
            </div>
            </div>',

        ]);
        DB::table('pages')->insert([
            'slug'=>"ssl-certificates",
            'title_ar'=>"شهادات الحماية SSL",
            'content_ar'=>"",
            'title_en'=>"",
            'content_en'=>"SSL Certificates",
            

        ]);
    }
}
