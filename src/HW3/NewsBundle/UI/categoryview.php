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
    <header>
    <div id=header>
    <section class="top">
        <div class="inner">
            <div class="fr">
                <div class="block_top_menu">
                    <ul>

                        <li><a href="http://www.tasnimnews.com/arabic" target="_blank">???????</a></li>
                    </ul>
                </div>

                <div class="block_social_top">
                    <ul>
                        <li><a href="/rss/feed/?c=1&amp;m=6&amp;alt=????? ?????" class="rss">RSS</a></li>
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
                            <li style="width: 100%"><a href="/Home/Archive?type=title">?????? ???</a></li>
                            <li style="width: 100%"><a href="/Home/Archive">???? ? ??? ? ???</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="block_big_dropdown" data-menu="Politics" style="display: none;">
                <div class="content">


                    <div class="image">
                        <a href="/Home/Single/69661" target="_blank" class="pic">
                            <img src="http://newsmedia.tasnimnews.com/Tasnim//Uploaded/Image/1392012821254809398151.jpg" alt="???? ??????"></a>
                        <p><a href="/Home/Single/69661" target="_blank">????????? ??? ???? ???? ?????? ?? ???????? ???????? ????????????</a></p>
                    </div>
                    <div class="line"></div>
                    <div class="image">
                        <a href="/Home/Single/69623" target="_blank" class="pic">
                            <img src="http://newsmedia.tasnimnews.com/Tasnim//Uploaded/Image/13920313170946882625981.jpg" alt="???? ?????"></a>
                        <p><a href="/Home/Single/69623" target="_blank">????? ???????? ???? ? ??????? ?????? ???? ??????????(??) ???? ??</a></p>
                    </div>
                    <div class="line"></div>
                    <div class="popular_posts">
                        <div class="title">
                            <p>????? ?? ?? ?????</p>
                        </div>
                        <ul>


                            <li><a href="/Home/Single/62994" target="_blank">????? ????????? «????????»</a></li>
                            <li><a href="/Home/Single/63003" target="_blank">????? ????????? «???????»</a></li>
                            <li><a href="/Home/Single/62909" target="_blank">????? ????????? «???? ?????»</a></li>
                            <li><a href="/Home/Single/63002" target="_blank">????? ????????? «???????? ??????»</a></li>
                            <li><a href="/Home/Single/63004" target="_blank">????? ????????? «???? ?????»</a></li>
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
                            <img src="http://newsmedia.tasnimnews.com/Tasnim//Uploaded/Image/13920229093954330547071.jpg" alt="????? ???"></a>
                        <p><a href="/Home/Single/69340" target="_blank">????? ?????? ?????????? «????? ???»/ ???? ??? ?? ??? ??? ???? ?????</a></p>
                    </div>
                    <div class="line"></div>
                    <div class="image">
                        <a href="/Home/Single/69532" target="_blank" class="pic">
                            <img src="http://newsmedia.tasnimnews.com/Tasnim//Uploaded/Image/13920210101345849452081.jpg" alt="???? ?????"></a>
                        <p><a href="/Home/Single/69532" target="_blank">????? ?????? ????? ????? ???? ???? ?????/ ??? ???? ?????? ???? ???? ????</a></p>
                    </div>
                    <div class="line"></div>
                    <div class="popular_posts">
                        <div class="title">
                            <p>????? ?? ?? ?????</p>
                        </div>
                        <ul>


                            <li><a href="/Home/Single/69141" target="_blank">????? ?????? ??????? ? ?????? ????? ?????????? ??????/ ???? ?????????? «?????» ?? ????????? ?????</a></li>
                            <li><a href="/Home/Single/67612" target="_blank">????? ??????? ??? ??????? ?? ????? ?????????? ????????/«???? ??? ???» ?? ??? «??? ???»</a></li>
                            <li><a href="/Home/Single/69122" target="_blank">???? ? ????? ?? ???? ??????/ «???? ???? ???? ????????» ??????????? ????? ??????</a></li>
                            <li><a href="/Home/Single/67381" target="_blank">???? ????? ??? ??????? «???????????» ??????/????? ??? ?? ?? ????? ???????? ?????? ??????</a></li>
                            <li><a href="/Home/Single/67532" target="_blank">???? ?? ?????? ?????? ??? ?????? ?????/???? ????? ??? ?? ?? ????????? ??????? ?????? ???</a></li>
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
                            <img src="http://newsmedia.tasnimnews.com/Tasnim//Uploaded/Image/13920313184824536626641.jpg" alt="???? ?????"></a>
                        <p><a href="/Home/Single/69708" target="_blank">??? ??? ???? ????? ??? ???? ?????? ?????? ???? ???? ???? ?? ????? ???</a></p>
                    </div>
                    <div class="line"></div>
                    <div class="image">
                        <a href="/Home/Single/69178" target="_blank" class="pic">
                            <img src="http://newsmedia.tasnimnews.com/Tasnim//Uploaded/Image/13920313134601464624981.jpg" alt="?????? "></a>
                        <p><a href="/Home/Single/69178" target="_blank">????? ??????? ?? ????? ???????/ ???? ??? ?? ?? ???? ????? ???????? ? ?? ??????? ????????</a></p>
                    </div>
                    <div class="line"></div>
                    <div class="popular_posts">
                        <div class="title">
                            <p>????? ?? ?? ?????</p>
                        </div>
                        <ul>


                            <li><a href="/Home/Single/69403" target="_blank">???? ????? ????? ????? ?? ?????? ???/ ????? ??????? ????? ?????? ????</a></li>
                            <li><a href="/Home/Single/69390" target="_blank">??? ? ??? ?? ????? ????? ????? ??/ ??? ???? ??? ???? ?????</a></li>
                            <li><a href="/Home/Single/69376" target="_blank">???? ???? ??? ???? ???????? ?? ?? ???? ????? ???</a></li>
                            <li><a href="/Home/Single/69220" target="_blank">????? ??????? ?????????? ???? ?? ?????? ????? ? ???????</a></li>
                            <li><a href="/Home/Single/69180" target="_blank">??????? ???? ???? ?????? ?? ???? ??? ?? ????? ????? ???</a></li>
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
                            <img src="http://newsmedia.tasnimnews.com/Tasnim//Uploaded/Image/13920314111919359628911.jpg" alt="???? ???????"></a>
                        <p><a href="/Home/Single/69638" target="_blank">?? ??????? ???? ??? ??????? ?? ???? ??????? + ????</a></p>
                    </div>
                    <div class="line"></div>
                    <div class="image">
                        <a href="/Home/Single/69644" target="_blank" class="pic">
                            <img src="http://newsmedia.tasnimnews.com/Tasnim//Uploaded/Image/13920314094434842628231.jpg" alt="????? ?? ????? ??? ??? ??????"></a>
                        <p><a href="/Home/Single/69644" target="_blank">?????: ????????? ????? ??? ????/ ???? ????? ?? ??? ???? ?????</a></p>
                    </div>
                    <div class="line"></div>
                    <div class="popular_posts">
                        <div class="title">
                            <p>????? ?? ?? ?????</p>
                        </div>
                        <ul>


                            <li><a href="/Home/Single/67472" target="_blank">?? ???? ?? ? ????? ????? ????????????? ????!/ ???????? ?? ??? ????!</a></li>
                            <li><a href="/Home/Single/66712" target="_blank">?? ?? ???????? ?????!</a></li>
                            <li><a href="/Home/Single/64704" target="_blank">???????? ?????? ???? ???????? ?????? ?? ??? ?????? ?? ?????  ???</a></li>
                            <li><a href="/Home/Single/64662" target="_blank">?? ??? ???? ?????? ??? ?????????? ?? ?????</a></li>
                            <li><a href="/Home/Single/64260" target="_blank">?????????: ??????? ??????? ????? ?? ?? ???? ?? ??????/???? ????? ????? ??????????? ????? ???????</a></li>
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
                            <img src="http://newsmedia.tasnimnews.com/Tasnim//Uploaded/Image/13920314082750785627571.jpg" alt="????"></a>
                        <p><a href="/Home/Single/69613" target="_blank">???? ???? ????? (??) ?? ????? ????? ???????</a></p>
                    </div>
                    <div class="line"></div>
                    <div class="image">
                        <a href="/Home/Single/69619" target="_blank" class="pic">
                            <img src="http://newsmedia.tasnimnews.com/Tasnim//Uploaded/Image/13920314091241894627861.jpg" alt="????"></a>
                        <p><a href="/Home/Single/69619" target="_blank">?? ??? ??? ?????????????? ????? ????? ?????? ?? ????? ????????? ????? ??</a></p>
                    </div>
                    <div class="line"></div>
                    <div class="popular_posts">
                        <div class="title">
                            <p>????? ?? ?? ?????</p>
                        </div>
                        <ul>


                            <li><a href="/Home/Single/69613" target="_blank">???? ???? ????? (??) ?? ????? ????? ???????</a></li>
                            <li><a href="/Home/Single/69617" target="_blank">?????? ???? ?????? ????? ???????? ???? ?? ???? ?????</a></li>
                            <li><a href="/Home/Single/69604" target="_blank">???? ?????????"?? ?????? ???? ?? ????? ????"????? ??????? ???/???????????? ?? ??????????? ?????? ????????</a></li>
                            <li><a href="/Home/Single/69605" target="_blank">??????? ??????? ?? ??????? ????? ?????? ?????? ?????????? (??)</a></li>
                            <li><a href="/Home/Single/69602" target="_blank">????? ??? ???? ????? ????? ?? ????? ?????? ?????? ????(??)</a></li>
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
    </header>
    <div id="gkpagecontent" class="gkPage">
        <div id="Cat" style="display: none">4</div>
        <div id="gkpagecontent" class="gkPage">
            <section id="gkcontent">
                <div id= "gkContentCategory">
                    <section id="gkBreadcrumb">
                        <div class="breadcrumbs">
                            <a href="/">صفحه اصلی</a> &gt; <a href="/Home/Category/4">فرهنگی</a>
                        </div>
                        <div class="ContentCount">
                            تعداد اخبار امروز: ۱۶
                        </div>
                        <!--[if IE 8]>
                        <div class="ie8clear"></div>
                        <![endif]-->
                    </section>
                    <section id="CategoryChoosen">
                        <div>
                            <section id="k2Container">
                                <div class="box bigtitle nsphover">
                                    <div class="content">

                                        <div class="catTop nspArt nspCol30">
                                            <div style="min-height: 305px">
                                                <a href="/Home/Single/68205" target="_blank" class="nspImageWrapper tleft fleft gkResponsive">
                                                    <img class="nspImage tleft fleft gkResponsive" src="http://newsmedia.tasnimnews.com/Tasnim//Uploaded/Image/139110260000073.jpg" alt="محمدرضا سنگری" width="295px" style="opacity: 1;"></a>
                                                <h4 class="nspHeader tleft fnone"><a href="/Home/Single/68205" target="_blank" title="">ادبیات سیاه‌نما عظمت دفاع مقدس را پنهان و بر تلخی‌ها تمرکز می‌کند</a></h4>
                                                <div class="nspHoverOverlay">
                                                    <h4 class="nspHeader tleft fnone">
                                                        <a href="/Home/Single/68205" target="_blank">ادبیات سیاه‌نما عظمت دفاع مقدس را پنهان و بر تلخی‌ها تمرکز می‌کند</a>
                                                    </h4>
                                                    <div class="nspText">
                                                        <a href="/Home/Single/68205" target="_blank">خبرگزاری تسنیم: محمدرضا سنگری با بیان این مطلب که نویسندگان ادبیات سیاه‌نمای دفاع مقدس عظمت و ارزش‌ها را پنهان و بر تلخی‌ها تمرکز می‌کند، گفت: سخن گفتن از تلخی‌ها و زخم‌ها در ادبیات دفاع مقدس باید توأم با درمان باشد‌، چراکه ادبیات باید درمانگر باشد.</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="catTop nspArt nspCol30">
                                            <div style="min-height: 305px">
                                                <a href="/Home/Single/70696" target="_blank" class="nspImageWrapper tleft fleft gkResponsive">
                                                    <img class="nspImage tleft fleft gkResponsive" src="http://newsmedia.tasnimnews.com/Tasnim//Uploaded/Image/13920316105932983640723.jpg" alt="حافظ" width="295px" style="opacity: 1;"></a>
                                                <h4 class="nspHeader tleft fnone"><a href="/Home/Single/70696" target="_blank" title="">از درخشش نمایندگان جمهوری اسلامی ایران تا تلاوت «شحات‌ انور»</a></h4>
                                                <div class="nspHoverOverlay">
                                                    <h4 class="nspHeader tleft fnone">
                                                        <a href="/Home/Single/70696" target="_blank">از درخشش نمایندگان جمهوری اسلامی ایران تا تلاوت «شحات‌ انور»</a>
                                                    </h4>
                                                    <div class="nspText">
                                                        <a href="/Home/Single/70696" target="_blank">خبرگزاری تسنیم: پنجمین روز مسابقات بین‌المللی قرآن کریم،‌ با رقابت ۱۴ قاری و ۹ حافظ با سپری شد. در این روز هاشم سلطانی‌نژاد سومین متسابق در رشته حفظ و وحید وکیلی سیزدهمین متسابق از رشته قرائت بودند که به رقابت با رقبای خود پرداختند.</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="catTop nspArt nspCol30">
                                            <div style="min-height: 305px">
                                                <a href="/Home/Single/70841" target="_blank" class="nspImageWrapper tleft fleft gkResponsive">
                                                    <img class="nspImage tleft fleft gkResponsive" src="http://newsmedia.tasnimnews.com/Tasnim//Uploaded/Image/139108160000373.jpg" alt="احمد خاتمی" width="295px" style="opacity: 1;"></a>
                                                <h4 class="nspHeader tleft fnone"><a href="/Home/Single/70841" target="_blank" title="">آیت‌الله خاتمی: سبد تبلیغاتی برخی از کاندیداها خالی از کالای فرهنگ و معنویت است</a></h4>
                                                <div class="nspHoverOverlay">
                                                    <h4 class="nspHeader tleft fnone">
                                                        <a href="/Home/Single/70841" target="_blank">آیت‌الله خاتمی: سبد تبلیغاتی برخی از کاندیداها خالی از کالای فرهنگ و معنویت است</a>
                                                    </h4>
                                                    <div class="nspText">
                                                        <a href="/Home/Single/70841" target="_blank">خبرگزاری تسنیم: آیت‌الله خاتمی گفت: متاسفانه در سبد تبلیغاتی برخی کاندیداها تنها کالایی که وجود ندارد، قرآن و معنویت است و بی‌ارج‌ترین موضوع برای برخی از این آقایان مسئله فرهنگ است.</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </section>
                        </div>
                    </section>
                    <section id="gkmainbody">
                        <div>
                            <div class='nsp bigtitle mobilelayout'>
                                <?php
                                    $news = getCategoryNews() ;

                                ?>
                                <div class="content"><?php
                                    for($i=0 ; $i<count($news) ; $i++)
                                    {
                                        echo "<div class='nspArt nspCol1 categoryList'>";
                                        echo "<a href=".$news[$i]->url." target='_blank' class='nspImageWrapper tleft fleft gkResponsive'>
                                            <img class='nspImage tleft fleft gkResponsive' src=".$news[$i]->picture." alt=".$news[$i]->alt." width='170px' height='118px'></a>
                                            <div class='gkArtContentWrap'>";
                                        echo "  <p class='nspInfo  nspInfo1 tleft fleft'>".$news[$i]->optionaltext."</p>";
                                        echo "
                                            <span class='nspDate tright fright'>".$news[$i]->date."</span>";

                                        echo "<h4 class='nspHeader tleft fnone'><a href=".$news[$i]->url." target='_blank'>".$news[$i]->title."</a></h4>
                                            <p class='nspText tleft fleft'>".$news[$i]->abstract."</p>
                                        </div>
                                        </div>
                                        </div>";
                                    }
                                ?>


                            </div>
                                <div class="pagination">
                                    <div class="wp-pagenavi">
                                        <span class="pages">صفحه ۲ از ۱۳۹</span>
                                        <a href="/Home/Category/1?page=1" class="previous">« قبل</a>
                                        <a href="/Home/Category/1?page=1" class="page">۱</a>
                                        <span class="current">۲</span>
                                        <a href="/Home/Category/1?page=3" class="page">۳</a>
                                        <a href="/Home/Category/1?page=4" class="page">۴</a>
                                        <a href="/Home/Category/1?page=5" class="page">۵</a>
                                        <a href="/Home/Category/1?page=6" class="page">۶</a>
                                        <a href="/Home/Category/1?page=7" class="page">۷</a>
                                        <a href="/Home/Category/1?page=8" class="page">۸</a>
                                        <a href="/Home/Category/1?page=9" class="page">۹</a>
                                        <a href="/Home/Category/1?page=10" class="page">...</a>
                                        <a href="/Home/Category/1?page=139" class="page">۱۳۹</a>
                                        <a href="/Home/Category/1?page=3" class="next">بعد »</a>
                                    </div>

                                    <!--wp-pagenavi-->
                                </div>
                            </div>

                        </div>

                    </section>
                </div>
            </section>
            <aside id="gkSidebar" class="gkOnlyOne">

                <div class="box nsp color">
                    <div class="splitHeader"><a href="/Home/Category/1" target="_blank">???????</a></div>
                    <div class="content side catList">
                        <div class="nspArt nspCol1">
                            <a href="/Home/Single/62994" target="_blank" class="nspImageWrapper tleft fleft gkResponsive">
                                <img class="nspImage tleft fleft gkResponsive" src="http://newsmedia.tasnimnews.com/Tasnim//Uploaded/Image/13920207164439281440091.jpg" alt="???? ????"></a>
                            <div class="gkArtContentWrap">
                                <h4 class="nspHeader tleft fnone"><a href="/Home/Single/62994" target="_blank">????? ????????? «????????»</a></h4>
                            </div>
                        </div>
                        <div class="nspArt nspCol1">
                            <a href="/Home/Single/63003" target="_blank" class="nspImageWrapper tleft fleft gkResponsive">
                                <img class="nspImage tleft fleft gkResponsive" src="http://newsmedia.tasnimnews.com/Tasnim//Uploaded/Image/13920215093435718474481.jpg" alt="???????? ???????"></a>
                            <div class="gkArtContentWrap">
                                <h4 class="nspHeader tleft fnone"><a href="/Home/Single/63003" target="_blank">????? ????????? «???????»</a></h4>
                            </div>
                        </div>
                        <div class="nspArt nspCol1">
                            <a href="/Home/Single/62909" target="_blank" class="nspImageWrapper tleft fleft gkResponsive">
                                <img class="nspImage tleft fleft gkResponsive" src="http://newsmedia.tasnimnews.com/Tasnim//Uploaded/Image/13920304091238621572241.jpg" alt="???? ?????/?????"></a>
                            <div class="gkArtContentWrap">
                                <h4 class="nspHeader tleft fnone"><a href="/Home/Single/62909" target="_blank">????? ????????? «???? ?????»</a></h4>
                            </div>
                        </div>
                        <div class="nspArt nspCol1">
                            <a href="/Home/Single/63002" target="_blank" class="nspImageWrapper tleft fleft gkResponsive">
                                <img class="nspImage tleft fleft gkResponsive" src="http://newsmedia.tasnimnews.com/Tasnim//Uploaded/Image/13920214180448940473231.jpg" alt="??? ???? ??????"></a>
                            <div class="gkArtContentWrap">
                                <h4 class="nspHeader tleft fnone"><a href="/Home/Single/63002" target="_blank">????? ????????? «???????? ??????»</a></h4>
                            </div>
                        </div>
                        <div class="nspArt nspCol1">
                            <a href="/Home/Single/63004" target="_blank" class="nspImageWrapper tleft fleft gkResponsive">
                                <img class="nspImage tleft fleft gkResponsive" src="http://newsmedia.tasnimnews.com/Tasnim//Uploaded/Image/13920226133415493538871.jpg" alt="?????"></a>
                            <div class="gkArtContentWrap">
                                <h4 class="nspHeader tleft fnone"><a href="/Home/Single/63004" target="_blank">????? ????????? «???? ?????»</a></h4>
                            </div>
                        </div>
                        <div class="nspArt nspCol1">
                            <a href="/Home/Single/63001" target="_blank" class="nspImageWrapper tleft fleft gkResponsive">
                                <img class="nspImage tleft fleft gkResponsive" src="http://newsmedia.tasnimnews.com/Tasnim//Uploaded/Image/13920218182119294494821.jpg" alt="??????"></a>
                            <div class="gkArtContentWrap">
                                <h4 class="nspHeader tleft fnone"><a href="/Home/Single/63001" target="_blank">????? ????????? «??? ??????»</a></h4>
                            </div>
                        </div>
                        <div class="nspArt nspCol1">
                            <a href="/Home/Single/63000" target="_blank" class="nspImageWrapper tleft fleft gkResponsive">
                                <img class="nspImage tleft fleft gkResponsive" src="http://newsmedia.tasnimnews.com/Tasnim//Uploaded/Image/13920216195321122485661.jpg" alt="????"></a>
                            <div class="gkArtContentWrap">
                                <h4 class="nspHeader tleft fnone"><a href="/Home/Single/63000" target="_blank">????? ????????? «??????? ????»</a></h4>
                            </div>
                        </div>
                        <div class="nspArt nspCol1">
                            <a href="/Home/Single/62999" target="_blank" class="nspImageWrapper tleft fleft gkResponsive">
                                <img class="nspImage tleft fleft gkResponsive" src="http://newsmedia.tasnimnews.com/Tasnim//Uploaded/Image/13920301190737576562811.jpg" alt="???? ????"></a>
                            <div class="gkArtContentWrap">
                                <h4 class="nspHeader tleft fnone"><a href="/Home/Single/62999" target="_blank">????? ????????? «??????? ????»</a></h4>
                            </div>
                        </div>
                        <div class="nspArt nspCol1">
                            <a href="/Home/Single/62686" target="_blank" class="nspImageWrapper tleft fleft gkResponsive">
                                <img class="nspImage tleft fleft gkResponsive" src="http://newsmedia.tasnimnews.com/Tasnim//Uploaded/Image/13920301183139218562781.jpg" alt="???????"></a>
                            <div class="gkArtContentWrap">
                                <h4 class="nspHeader tleft fnone"><a href="/Home/Single/62686" target="_blank">???? ???? ??? ?????????? ???????? ?????????</a></h4>
                            </div>
                        </div>
                        <div class="nspArt nspCol1">
                            <a href="/Home/Single/62955" target="_blank" class="nspImageWrapper tleft fleft gkResponsive">
                                <img class="nspImage tleft fleft gkResponsive" src="http://newsmedia.tasnimnews.com/Tasnim//Uploaded/Image/13920301183139218562781.jpg" alt="???????"></a>
                            <div class="gkArtContentWrap">
                                <h4 class="nspHeader tleft fnone"><a href="/Home/Single/62955" target="_blank">???? ???? ??? ?????????? ???????? ????????? ?? ???????? ???????</a></h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="box ">
                    <h3 class="splitHeader"><a href="#">????? ?????</a></h3>
                    <div class="content">
                        <div id="calendar" class="hasDatepicker">
                            <div class="ui-datepicker-inline ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all ui-datepicker-rtl" style=""><div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-all"><a style="direction:ltr" class="ui-datepicker-next ui-corner-all" onclick="DP_jQuery_1371183094885.datepicker._adjustDate('#calendar', +1, 'M');" title="«"><span class="ui-icon ui-icon-circle-triangle-w">«</span></a><a style="direction:ltr" class="ui-datepicker-prev ui-corner-all" onclick="DP_jQuery_1371183094885.datepicker._adjustDate('#calendar', -1, 'M');" title="»"><span class="ui-icon ui-icon-circle-triangle-e">»</span></a><div class="ui-datepicker-title"><span class="ui-datepicker-month">?????</span>&nbsp;<span class="ui-datepicker-year">1392</span></div></div><table class="ui-datepicker-calendar"><thead><tr><th class="ui-datepicker-week-end"><span title="????">?</span></th><th class="ui-datepicker-week-end"><span title="??????">?</span></th><th><span title="??????">?</span></th><th><span title="?? ????">?</span></th><th><span title="????????">?</span></th><th><span title="???????">?</span></th><th><span title="????">?</span></th></tr></thead><tbody><tr><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" " onclick="DP_jQuery_1371183094885.datepicker._selectDay('#calendar',2,1392, this);return false;"><a class="ui-state-default" href="#">1</a></td><td class=" " onclick="DP_jQuery_1371183094885.datepicker._selectDay('#calendar',2,1392, this);return false;"><a class="ui-state-default" href="#">2</a></td><td class=" " onclick="DP_jQuery_1371183094885.datepicker._selectDay('#calendar',2,1392, this);return false;"><a class="ui-state-default" href="#">3</a></td></tr><tr><td class=" ui-datepicker-week-end " onclick="DP_jQuery_1371183094885.datepicker._selectDay('#calendar',2,1392, this);return false;"><a class="ui-state-default" href="#">4</a></td><td class=" ui-datepicker-week-end " onclick="DP_jQuery_1371183094885.datepicker._selectDay('#calendar',2,1392, this);return false;"><a class="ui-state-default" href="#">5</a></td><td class=" " onclick="DP_jQuery_1371183094885.datepicker._selectDay('#calendar',2,1392, this);return false;"><a class="ui-state-default" href="#">6</a></td><td class=" " onclick="DP_jQuery_1371183094885.datepicker._selectDay('#calendar',2,1392, this);return false;"><a class="ui-state-default" href="#">7</a></td><td class=" " onclick="DP_jQuery_1371183094885.datepicker._selectDay('#calendar',2,1392, this);return false;"><a class="ui-state-default" href="#">8</a></td><td class=" " onclick="DP_jQuery_1371183094885.datepicker._selectDay('#calendar',2,1392, this);return false;"><a class="ui-state-default" href="#">9</a></td><td class=" " onclick="DP_jQuery_1371183094885.datepicker._selectDay('#calendar',2,1392, this);return false;"><a class="ui-state-default" href="#">10</a></td></tr><tr><td class=" ui-datepicker-week-end " onclick="DP_jQuery_1371183094885.datepicker._selectDay('#calendar',2,1392, this);return false;"><a class="ui-state-default" href="#">11</a></td><td class=" ui-datepicker-week-end " onclick="DP_jQuery_1371183094885.datepicker._selectDay('#calendar',2,1392, this);return false;"><a class="ui-state-default" href="#">12</a></td><td class=" " onclick="DP_jQuery_1371183094885.datepicker._selectDay('#calendar',2,1392, this);return false;"><a class="ui-state-default" href="#">13</a></td><td class=" " onclick="DP_jQuery_1371183094885.datepicker._selectDay('#calendar',2,1392, this);return false;"><a class="ui-state-default" href="#">14</a></td><td class=" " onclick="DP_jQuery_1371183094885.datepicker._selectDay('#calendar',2,1392, this);return false;"><a class="ui-state-default" href="#">15</a></td><td class=" " onclick="DP_jQuery_1371183094885.datepicker._selectDay('#calendar',2,1392, this);return false;"><a class="ui-state-default" href="#">16</a></td><td class=" " onclick="DP_jQuery_1371183094885.datepicker._selectDay('#calendar',2,1392, this);return false;"><a class="ui-state-default" href="#">17</a></td></tr><tr><td class=" ui-datepicker-week-end " onclick="DP_jQuery_1371183094885.datepicker._selectDay('#calendar',2,1392, this);return false;"><a class="ui-state-default" href="#">18</a></td><td class=" ui-datepicker-week-end " onclick="DP_jQuery_1371183094885.datepicker._selectDay('#calendar',2,1392, this);return false;"><a class="ui-state-default" href="#">19</a></td><td class=" " onclick="DP_jQuery_1371183094885.datepicker._selectDay('#calendar',2,1392, this);return false;"><a class="ui-state-default" href="#">20</a></td><td class=" " onclick="DP_jQuery_1371183094885.datepicker._selectDay('#calendar',2,1392, this);return false;"><a class="ui-state-default" href="#">21</a></td><td class=" " onclick="DP_jQuery_1371183094885.datepicker._selectDay('#calendar',2,1392, this);return false;"><a class="ui-state-default" href="#">22</a></td><td class=" " onclick="DP_jQuery_1371183094885.datepicker._selectDay('#calendar',2,1392, this);return false;"><a class="ui-state-default" href="#">23</a></td><td class=" ui-datepicker-days-cell-over  ui-datepicker-current-day ui-datepicker-today" onclick="DP_jQuery_1371183094885.datepicker._selectDay('#calendar',2,1392, this);return false;"><a class="ui-state-default ui-state-highlight ui-state-active ui-state-hover" href="#">24</a></td></tr><tr><td class=" ui-datepicker-week-end " onclick="DP_jQuery_1371183094885.datepicker._selectDay('#calendar',2,1392, this);return false;"><a class="ui-state-default" href="#">25</a></td><td class=" ui-datepicker-week-end " onclick="DP_jQuery_1371183094885.datepicker._selectDay('#calendar',2,1392, this);return false;"><a class="ui-state-default" href="#">26</a></td><td class=" " onclick="DP_jQuery_1371183094885.datepicker._selectDay('#calendar',2,1392, this);return false;"><a class="ui-state-default" href="#">27</a></td><td class=" " onclick="DP_jQuery_1371183094885.datepicker._selectDay('#calendar',2,1392, this);return false;"><a class="ui-state-default" href="#">28</a></td><td class=" " onclick="DP_jQuery_1371183094885.datepicker._selectDay('#calendar',2,1392, this);return false;"><a class="ui-state-default" href="#">29</a></td><td class=" " onclick="DP_jQuery_1371183094885.datepicker._selectDay('#calendar',2,1392, this);return false;"><a class="ui-state-default" href="#">30</a></td><td class=" " onclick="DP_jQuery_1371183094885.datepicker._selectDay('#calendar',2,1392, this);return false;"><a class="ui-state-default" href="#">31</a></td></tr></tbody></table></div></div>
                    </div>
                </div>
            </aside>
        </div>

        </div>

    <footer id="gkFooter" class="gkPage">


        <p id="gkCopyrights">© <a href="http://www.tasnimnews.com/" title="Tasnim News Agency">Tasnim News Agency</a>. All rights reserved.</p>


    </footer>
    <script>
        catContent();
    </script>
</html>