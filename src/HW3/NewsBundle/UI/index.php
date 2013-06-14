<html>
    <head>

        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <script src=./jquery-1.9.1.js> </script>
        <script src=./library.js> </script>
        <link rel="stylesheet" href="style.css" type="text/css" />
        <link rel="stylesheet" href="Header.css" type="text/css" />
        <link rel="stylesheet" href="Custom.css" type="text/css" />
        <link rel="stylesheet" href="ticker-style.css" type="text/css" />
        <title>خبرگزاری</title>
    </head>
    <?php
        include_once("data.php");
        initializeVars();
        allCatContent();
    ?>
    <body>
        <header>
            <div id=header>
                <section class="top">
                    <div class="inner">
                        <div class="fr">
                            <div class="block_top_menu">
                                <ul>

                                    <li><a href="http://www.tasnimnews.com/arabic" target="_blank">العربیة</a></li>
                                </ul>
                            </div>

                            <div class="block_social_top">
                                <ul>
                                    <li><a href="/rss/feed/?c=1&amp;m=6&amp;alt=آخرین اخبار" class="rss">RSS</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="clearboth"></div>
                    </div>
                </section>
                <section class="bottom">
                    <div class="inner">
                        <div id="logo_top">

                        </div>





                        <div class="clearboth"></div>
                    </div>

                </section>
                <section class="section_main_menu">
                    <div class="inner">
                        <nav class="main_menu">
                            <ul>
                                <li class="big_dropdown current_page_item" data-content="MainPage"><a href="/" target="_self"><?php echo $menutitle[0]; ?></a>
                                </li>
                                <li class="big_dropdown" data-content="NewsArticle"><a href="http://www.tasnimnews.com/Home/Archive" target="_self"><?php echo $menutitle[1]; ?></a>
                                </li>
                                <li class="big_dropdown" data-content="Politics"><a href="/Home/Category/1" target="_self"><?php echo $menutitle[2]; ?></a>
                                </li>
                                <li class="big_dropdown" data-content="Cultural"><a href="/Home/Category/4" target="_self"><?php echo $menutitle[3]; ?></a>
                                </li>
                                <li class="big_dropdown" data-content="Economic"><a href="/Home/Category/7" target="_self"><?php echo $menutitle[4]; ?></a>
                                </li>
                                <li class="big_dropdown " data-content="Athletic"><a href="/Home/Category/3" target="_self"><?php echo $menutitle[5]; ?></a>
                                </li>
                                <li class="big_dropdown " data-content="Social"><a href="/Home/Category/2" target="_self"><?php echo $menutitle[6]; ?></a>
                                </li>

                            </ul>
                        </nav>
                    </div>
                </section>
                <section class="section_big_dropdown">
                <div class="inner">
                <div class="block_big_dropdown" data-menu="NewsArticle" style="width: 250px; display: none;">
                    <div class="content">
                        <div class="more" style="width: 220px">
                            <ul>
                                <li style="width: 100%"><a href="/Home/Archive?type=title">عناوین خبر</a></li>
                                <li style="width: 100%"><a href="/Home/Archive">تیتر و لید و عکس</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="block_big_dropdown" data-menu="Politics" style="display: none;">
                    <div class="content">


                        <div class="image">
                            <a href="/Home/Single/69661" target="_blank" class="pic">
                                <img src="http://newsmedia.tasnimnews.com/Tasnim//Uploaded/Image/1392012821254809398151.jpg" alt="رهبر انقلاب"></a>
                            <p><a href="/Home/Single/69661" target="_blank">توصیه‌های مهم رهبر معظم انقلاب به نامزدهای انتخابات ریاست‌جمهوری</a></p>
                        </div>
                        <div class="line"></div>
                        <div class="image">
                            <a href="/Home/Single/69623" target="_blank" class="pic">
                                <img src="http://newsmedia.tasnimnews.com/Tasnim//Uploaded/Image/13920313170946882625981.jpg" alt="امام خمینی"></a>
                            <p><a href="/Home/Single/69623" target="_blank">مراسم بزرگداشت بیست و چهارمین سالگرد رحلت امام‌خمینی(ره) آغاز شد</a></p>
                        </div>
                        <div class="line"></div>
                        <div class="popular_posts">
                            <div class="title">
                                <p>گزیده ای از اخبار</p>
                            </div>
                            <ul>


                                <li><a href="/Home/Single/62994" target="_blank">اخبار انتخاباتی «حدادعادل»</a></li>
                                <li><a href="/Home/Single/63003" target="_blank">اخبار انتخاباتی «قالیباف»</a></li>
                                <li><a href="/Home/Single/62909" target="_blank">اخبار انتخاباتی «سعید جلیلی»</a></li>
                                <li><a href="/Home/Single/63002" target="_blank">اخبار انتخاباتی «علی‌اکبر ولایتی»</a></li>
                                <li><a href="/Home/Single/63004" target="_blank">اخبار انتخاباتی «محسن رضایی»</a></li>
                            </ul>
                        </div>
                        <div class="line"></div>

                        <div class="clearboth"></div>
                    </div>
                </div>


                <div class="block_big_dropdown" data-menu="Cultural" style="display: none;">
                    <div class="content">


                        <div class="image">
                            <a href="/Home/Single/69340" target="_blank" class="pic">
                                <img src="http://newsmedia.tasnimnews.com/Tasnim//Uploaded/Image/13920229093954330547071.jpg" alt="معمای شاه"></a>
                            <p><a href="/Home/Single/69340" target="_blank">پایان ۴۰درصد فیلمبرداری «معمای شاه»/ فرار شاه به رم، فاز بعدی سریال</a></p>
                        </div>
                        <div class="line"></div>
                        <div class="image">
                            <a href="/Home/Single/69532" target="_blank" class="pic">
                                <img src="http://newsmedia.tasnimnews.com/Tasnim//Uploaded/Image/13920210101345849452081.jpg" alt="امام خمینی"></a>
                            <p><a href="/Home/Single/69532" target="_blank">تشکیل حکومت؛ آخرین مرحله سلوک امام خمینی/ نظر امام درباره ظاهر قرآن بود؟</a></p>
                        </div>
                        <div class="line"></div>
                        <div class="popular_posts">
                            <div class="title">
                                <p>گزیده ای از اخبار</p>
                            </div>
                            <ul>


                                <li><a href="/Home/Single/69141" target="_blank">عراق، سودان، میانمار و لبنان، مقاصد مستندسازان ایرانی/ حضور بین‌المللی «میثاق» در کانون‌های بحران</a></li>
                                <li><a href="/Home/Single/67612" target="_blank">تبدیل ژست‌های جدی نامزدها به نمایش ژورنالیستی تلویزیون/«سوال غلط است» به جای «بگم بگم»</a></li>
                                <li><a href="/Home/Single/69122" target="_blank">راعی و افخمی هم موفق نبودند/ «سیره عملی امام روح‌الله» برجسته‌ترین مستند ایرانی</a></li>
                                <li><a href="/Home/Single/67381" target="_blank">وزیر فرهنگ قطر مخفیانه «یوسف‌پیامبر» می‌دید/فاجعه است که در سوریه مستندساز ایرانی نداریم</a></li>
                                <li><a href="/Home/Single/67532" target="_blank">فردی به ادبیات انقلاب جان دوباره بخشید/تنها مدیری بود که به نویسندگان شهرستان اعتماد کرد</a></li>
                            </ul>
                        </div>
                        <div class="line"></div>

                        <div class="clearboth"></div>
                    </div>
                </div>
                <div class="block_big_dropdown" data-menu="Economic" style="display: none;">
                    <div class="content">



                        <div class="image">
                            <a href="/Home/Single/69708" target="_blank" class="pic">
                                <img src="http://newsmedia.tasnimnews.com/Tasnim//Uploaded/Image/13920313184824536626641.jpg" alt="امام خمینی"></a>
                            <p><a href="/Home/Single/69708" target="_blank">طبق نظر امام خمینی عدم تحقق اقتصاد اسلامی ریشه بروز فساد در جامعه است</a></p>
                        </div>
                        <div class="line"></div>
                        <div class="image">
                            <a href="/Home/Single/69178" target="_blank" class="pic">
                                <img src="http://newsmedia.tasnimnews.com/Tasnim//Uploaded/Image/13920313134601464624981.jpg" alt="نادران "></a>
                            <p><a href="/Home/Single/69178" target="_blank">تثبیت قیمت‌ها را ادامه می‌دهیم/ قصور خود را به گردن جمشید بسم‌الله و یک چارپایه انداختند</a></p>
                        </div>
                        <div class="line"></div>
                        <div class="popular_posts">
                            <div class="title">
                                <p>گزیده ای از اخبار</p>
                            </div>
                            <ul>


                                <li><a href="/Home/Single/69403" target="_blank">بانک مرکزی بخوبی بازار را مدیریت کرد/ تأمین نیازهای اساسی اولویت باشد</a></li>
                                <li><a href="/Home/Single/69390" target="_blank">سکه و طلا در بازار داخلی ارزان شد/ طلا گرمی ۱۲۳ هزار تومان</a></li>
                                <li><a href="/Home/Single/69376" target="_blank">مرکز آمار نرخ تورم اردیبهشت را ۳۱ درصد اعلام کرد</a></li>
                                <li><a href="/Home/Single/69220" target="_blank">بازار بی‌ثبات اجاره‌بهای مسکن در انتظار معجزه ۸ کاندیدا</a></li>
                                <li><a href="/Home/Single/69180" target="_blank">برگزاری جلسه ویژه افزایش حق مسکن بعد از اجلاس جهانی کار</a></li>
                            </ul>
                        </div>
                        <div class="line"></div>

                        <div class="clearboth"></div>
                    </div>
                </div>
                <div class="block_big_dropdown" data-menu="Athletic" style="display: none;">
                    <div class="content">



                        <div class="image">
                            <a href="/Home/Single/69638" target="_blank" class="pic">
                                <img src="http://newsmedia.tasnimnews.com/Tasnim//Uploaded/Image/13920314111919359628911.jpg" alt="وحید هاشمیان"></a>
                            <p><a href="/Home/Single/69638" target="_blank">چه بازیکنی امشب نقش هاشمیان را بازی می‌کند؟ + فیلم</a></p>
                        </div>
                        <div class="line"></div>
                        <div class="image">
                            <a href="/Home/Single/69644" target="_blank" class="pic">
                                <img src="http://newsmedia.tasnimnews.com/Tasnim//Uploaded/Image/13920314094434842628231.jpg" alt="عباسی در اردوی تیم ملی فوتبال"></a>
                            <p><a href="/Home/Single/69644" target="_blank">عباسی: می‌توانید تاریخ ساز شوید/ رئیس جمهور به شما سلام رساند</a></p>
                        </div>
                        <div class="line"></div>
                        <div class="popular_posts">
                            <div class="title">
                                <p>گزیده ای از اخبار</p>
                            </div>
                            <ul>


                                <li><a href="/Home/Single/67472" target="_blank">یک هفته از ۳ خرداد گذشت، فتح‌الله‌زاده نرفت!/ صندلی‌ای که چسب دارد!</a></li>
                                <li><a href="/Home/Single/66712" target="_blank">تو چه اراده‌ای داشتی!</a></li>
                                <li><a href="/Home/Single/64704" target="_blank">فدراسیون فوتبال حضور بازیکنان ایرانی در لیگ امارات را ممنوع  کرد</a></li>
                                <li><a href="/Home/Single/64662" target="_blank">یک بار برای همیشه؛ پای اماراتی‌ها را بِبُر</a></li>
                                <li><a href="/Home/Single/64260" target="_blank">علی‌آبادی: کفاشیان بدشانسی آورد، به او نمره ۱۵ می‌دهم/برای تغییر روسای فدراسیون‌ها خواهش می‌کردم</a></li>
                            </ul>
                        </div>
                        <div class="line"></div>

                        <div class="clearboth"></div>
                    </div>
                </div>
                <div class="block_big_dropdown" data-menu="Social" style="display: none;">
                    <div class="content">



                        <div class="image">
                            <a href="/Home/Single/69613" target="_blank" class="pic">
                                <img src="http://newsmedia.tasnimnews.com/Tasnim//Uploaded/Image/13920314082750785627571.jpg" alt="امام"></a>
                            <p><a href="/Home/Single/69613" target="_blank">همسر امام خمینی (ره) از زندگی مشترک می‌گوید</a></p>
                        </div>
                        <div class="line"></div>
                        <div class="image">
                            <a href="/Home/Single/69619" target="_blank" class="pic">
                                <img src="http://newsmedia.tasnimnews.com/Tasnim//Uploaded/Image/13920314091241894627861.jpg" alt="امام"></a>
                            <p><a href="/Home/Single/69619" target="_blank">از جای جای ایران‌آمده‌ایم ،برای لبیکی دوباره با خمینی کبیروامام خامنه ای</a></p>
                        </div>
                        <div class="line"></div>
                        <div class="popular_posts">
                            <div class="title">
                                <p>گزیده ای از اخبار</p>
                            </div>
                            <ul>


                                <li><a href="/Home/Single/69613" target="_blank">همسر امام خمینی (ره) از زندگی مشترک می‌گوید</a></li>
                                <li><a href="/Home/Single/69617" target="_blank">شوراها باید بدنبال تبدیل تهدیدهای شهری به فرصت باشند</a></li>
                                <li><a href="/Home/Single/69604" target="_blank">ستاد انتخاباتی"در امتداد مهر، در آرزوی بهار"اعلام موجودیت کرد/شیخ‌الاسلامی سر لیست،نیکزاد شهردار پیشنهادی</a></li>
                                <li><a href="/Home/Single/69605" target="_blank">اقدامات شهرداری در برگزاری مراسم سالگرد ارتحال امام‌خمینی (ره)</a></li>
                                <li><a href="/Home/Single/69602" target="_blank">آماده باش بسیج جامعه پزشکی در مراسم سالگرد ارتحال امام(ره)</a></li>
                            </ul>
                        </div>
                        <div class="line"></div>

                        <div class="clearboth"></div>
                    </div>
                </div>


                </div>
                </section>
                <section class="section_secondary_menu">
                    <div class="inner">
                        <nav class="secondary_menu">

                            <span>گزیده ای از اخبار :</span>
                            <div id="ticker-wrapper-1370343347593" class="ticker-wrapper has-js right"><div id="ticker-1370343347593" class="ticker"><div id="ticker-title-1370343347593" class="ticker-title" style="display: block;"><span style=""></span></div><p id="ticker-content-1370343347593" class="ticker-content" style="display: block; opacity: 1; right: 30px;"><a href="/Home/Single/69716">امام خمینی (ره) نقشه سیاسی جهان را عوض کرد</a></p><div id="ticker-swipe-1370343347593" class="ticker-swipe" style="right: 30px; margin-right: 227px; display: none;"><span style="display: block;"><!-- --></span></div></div></div>

                        </nav>

                        <div class="block_clock">

                            <div id="ticker-wrapper-1370343347641" class="ticker-wrapper has-js right"><div id="ticker-1370343347641" class="ticker"><div id="ticker-title-1370343347641" class="ticker-title" style="display: block;"><span style=""></span></div><p id="ticker-content-1370343347641" class="ticker-content" style="display: block; opacity: 1; right: 20px;">الإثنین، ۲۴ رجب ۱۴۳۴ ۱:۱۳:۵۱ م</p><div id="ticker-swipe-1370343347641" class="ticker-swipe" style="right: 20px; margin-right: 42.3px;"><span style="display: block;"><!-- --></span></div></div></div>

                        </div>

                    </div>
                </section>
            </div>
            <div id="gkpagecontent" class="gkpage">
                <section id="gkContent">
                    <section class="gkMain">
                        <div class="box nsp clear light header">
                            <div class="nspMain nspFs100 activated">

                                <div class="nspArts right box nsp bigtitle nsphover nomargin" style="width: 350px;">
                                    <div class="nspArt nspCol1">
                                        <div class="center tcenter fnone gkResponsive">

                                            <a href="/Home/Single/69661" target="_blank" class="nspImageWrapper tcenter fnone gkResponsive">
                                                <img class="nspImage noborder" src="http://newsmedia.tasnimnews.com/Tasnim//Uploaded/Image/1392012821254809398153.jpg" alt="رهبر انقلاب" style="opacity: 1;">
                                            </a><h4 class="nspHeader tleft fnone MainHeader" style="display: block;"><a href="/Home/Single/69661" target="_blank" class="nspImageWrapper tcenter fnone gkResponsive">
                                                </a><a href="/Home/Single/69661" target="_blank">توصیه‌های مهم رهبر معظم انقلاب به نامزدهای انتخابات ریاست‌جمهوری</a>
                                            </h4>


                                            <div class="nspHoverOverlay">
                                                <h3 class="nspHeader tleft fnone">
                                                    <a href="/Home/Single/69661" target="_blank">توصیه‌های مهم رهبر معظم انقلاب به نامزدهای انتخابات ریاست‌جمهوری</a>
                                                </h3>
                                                <div class="nspText">
                                                    <a target="_blank" href="/Home/Single/69661">خبرگزاری تسنیم: رهبر معظم انقلاب در بیانات خود در حرم امام راحل، توصیه‌های مهمی را خطاب به نامزدهای انتخابات ریاست‌جمهوری بیان فرمودند.</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="nspLinksWrap right">
                                    <div class="nspLinks">
                                        <div class="nspLinkScroll1">

                                            <div class="nspLinkScroll2 nspPages4">

                                                <ul class="nspArt nspList slider" id="slide_0" style="display: none;">
                                                    <?php
                                                        for($i=0 ; $i<6 ; $i++)
                                                        {
                                                            echo "<li ";
                                                            if( $i %2 == 0)
                                                                echo "class=''>";
                                                            else
                                                                echo "class='even'>";
                                                            echo $menutag[$i]."</li>";

                                                        }
                                                    ?>

                                                </ul>

                                                <ul class="nspArt nspList slider" id="slide_1" style="display: block;">
                                                    <?php
                                                    for($i=0 ; $i<6 ; $i++)
                                                    {
                                                        echo "<li ";
                                                        if( $i %2 == 0)
                                                            echo "class=''>";
                                                        else
                                                            echo "class='even'>";
                                                        echo $menutaghidden[$i]."</li>";

                                                    }
                                                    ?>
                                                </ul>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="nspBotInterface">
                                    <div>
                                        <ul id="SliderPaging" class="nspPagination">
                                            <li act="slide_0" class="">0</li><li act="slide_1" class="active">1</li></ul>
                                    </div>
                                </div>



                            </div>
                        </div>

                    </section>
                    <div id="gkContentWrap">
                        <?php
                            foreach($catcontent as $index => $val)
                            {
                                echo"<section class='gkMainbodyTop'>
                                <div class='catBorder'>
                                <div class='catHeader'><div><a href='#'>".$val['group']."</a></div></div></div>";
                                echo " <div class='box nsp clear light header'>
                                <div class='nspMain nspFs100 activated' style='width: 100%;' data-direction='ltr'>";
                                echo "<div class='nspArts aright' style='width: 60%;' catid=".$index.">
                                        <div class='nspArtScroll1'>
                                            <div class='nspArtScroll2 nspPages1'>
                                                <div class='nspArtPage nspCol1'>

                                                    <div class='nspArt nspCol1 catMain'>
                                                        <div class='center tcenter fnone gkResponsive'>";
                                echo "                     <a href='/Home/Single/69661' target='_blank' class='nspImageWrapper tcenter fnone gkResponsive'>
                                                                <img class='nspImage' src='http://newsmedia.tasnimnews.com/Tasnim//Uploaded/Image/1392012821254809398153.jpg' alt='خبر در حال بروز رسانی'>
                                                            </a>
                                                        </div>";
                                echo "     <h4 class='tleft fnone'>
                                                            <a href='/Home/Single/69661' target='_blank'>توصیه‌های مهم رهبر معظم انقلاب به نامزدهای انتخابات ریاست‌جمهوری</a>
                                                        </h4>
                                                        <p class='nspText tleft fleft tjustify'>
                                                        </p><div class='AbsText'>خبرگزاری تسنیم: رهبر معظم انقلاب در بیانات خود در حرم امام راحل، توصیه‌های مهمی را خطاب به نامزدهای انتخابات ریاست‌جمهوری بیان فرمودند.</div>
                                                        <p></p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>";
                                    echo "    <div class='nspLinksWrap aright' style='width: 39.9%;'>
                                        <div class='nspLinks'>
                                            <div class='catLinkScroll1'>

                                                <div class='nspLinkScroll2 nspPages4'>
                                                    <ul class='nspArt nspList catList nspCol4' catlist=".$index.">";
                                    echo $val['html'];
                                    echo "        </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>";
                        }
             ?>






                </div>

                </section>
                <aside id="gkSidebar">

                <div class="block_search_top">
                    <form action="/Search/Index" method="GET">
                        <div class="field">
                            <input type="text" class="w_def_text" id="search-box" name="query" title="جستجوی سریع">
                        </div>
                        <input type="hidden" name="submited" value="1">
                        <input type="hidden" name="positions" value="-1">
                        <input type="submit" class="button" id="search-button">

                        <div class="clearboth"></div>
                    </form>
                </div>





                <div style="padding: 10px 22px 0 0;">

                </div>

                <div style="padding: 2px 5px 0 0;">

                </div>

                <div class="tabbed_area">
                    <ul class="LeftTopTabs">
                        <li class="first" act="content_1"><a href="#">برگزیده</a></li>
                        <li class="middle active" act="content_2" style="float: left;"><a href="#">آخرین اخبار</a></li>

                    </ul>
                    <div id="content_1" class="content" style="display: none; overflow: hidden;">
                        <ul style="-webkit-transform: translateZ(0); height: 950px;">
                            <li class="active"><a href="/Home/Single/70285" target="_blank">مردم با گرانی و تورم کنار آمده‌‏اند/ مشکلات اقتصادی قابل حل است</a></li>

                            <li><a href="/Home/Single/69618" target="_blank">یک استقلالی در اردوگاه پرسپولیسی‌ها</a></li>
                            <li><a href="/Home/Single/69548" target="_blank">سخنرانی تبلیغی پسر برای پدر</a></li>
                            <li><a href="/Home/Single/69516" target="_blank">ماجرای نامه‌ای که امام خمینی(ره)  پاره کرد؟</a></li>
                            <li><a href="/Home/Single/69414" target="_blank">ایران در دوحه سفیدپوش می‌شود</a></li>
                            <li><a href="/Home/Single/69390" target="_blank">طلا ارزان شد</a></li>
                        </ul>
                    </div>
                    <div id="content_2" class="content" style="display: block; overflow: hidden;">
                        <ul style="-webkit-transform: translateZ(0); height: 1390px;">
                            <li class="active"><a href="/Home/Single/70285" target="_blank">مردم با گرانی و تورم کنار آمده‌‏اند/ مشکلات اقتصادی قابل حل است</a></li>
                            <li><a href="/Home/Single/70257" target="_blank">ایران و پاکستان برای همکاری‌ در دریا موافقت‌نامه امضا کردند</a></li>
                            <li><a href="/Home/Single/70258" target="_blank">زمین­گیر شدن تولید؛ خط قرمز اقتصاد ایران</a></li>
                            <li><a href="/Home/Single/70255" target="_blank">آزمون کنکور سراسری  امسال در قصرشیرین برگزار می شود</a></li>
                            <li><a href="/Home/Single/70242" target="_blank">بهره برداری از ۴ جایگاه جدید CNG‌ در نیمه نخست خرداد</a></li>
                        </ul>
                    </div>

                </div>



                </aside>
            </div>
            <footer id="gkFooter" class="gkPage">


                <p id="gkCopyrights">© <a href="http://www.tasnimnews.com/" title="Tasnim News Agency">Tasnim News Agency</a>. All rights reserved.</p>


            </footer>
        </header>

    </body>
    <script>
        mainNavigation();
        middleContent();
        catContent();

    </script>
</html>