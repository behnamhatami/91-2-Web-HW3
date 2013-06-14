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
        <div id="gkPageContent" class="gkPage">
            <?php
                $news = getCompleteNews();
                echo "<section id='gkContent'>
                <div id='gkContentCategory'>

                    <section id='gkBreadcrumb'>
                        <div class='breadcrumbs'>";
                echo "       <a href='/'>صفحه اصلی</a> &gt; <a href=".$news->url.">".$news->group."</a>";
                echo "    </div><div class='ContentCount'>";
                echo "سرویس:";
                echo $news->group;
                echo "،تاریخ :";
                echo $news->date ;
                echo "شناسه خبر : ";
                echo $news->id."</div>" ;
                echo "                        <div class='ie8clear'></div>                    </section>";
                echo"                    <section id='gkMainStory'>
                        <div>
                            <article id='k2Container' class='itemView'>";
                echo "<img src=".$news->bigsrc."  alt=".$news->alt." width='400px'><header>";
                echo "<span>".$news->optionaltext."</span>
                                    <h1>".$news->title."</h1>";
                echo "<div class='Abstract'>".$news->abstract."</div></header>";
            ?>                  <div class="actionBox">
                                    <a href="javascript:Print('70598');">
                                        <img src="/Content/Images/Global/print.png" alt="print"><span>نسخه قابل چاپ</span></a>
                                </div>



                                <div class="itemBody StoryBody">
                                    <div class="itemFullText"><?php
                                        echo $news->content;
                                    ?>
                                    </div>

                                </div>



                            </article>

                        </div>

                    </section>

                </div>
            </section>
            <div id="gkCommentWrap">
                <section class='gkComment'>

                    <div class="comBorder">
                        <div class="comHeader">
                            <div>
                                نظرات بینندگان
                            </div>


                        </div>
                        <div class="commentRating">
                            <div class="ratingDown" id="down_rate_7556175">85</div>
                            <a  class="rateDownLink" id="up_button_7556175"></a>
                            <a  class="rateUpLink" id="down_button_7556175"></a>

                            <div class="ratingUp" id="up_rate_7556175">280</div>
                        </div>

                    </div>
                    <div class="comment box nsp clear light header">
                        <?php  $temp = getcomment();
                        //    echo "kir";
                            echo count($temp);
                            //$temp = null ;
                            $curlevel = -1 ;
                            for($i=0 ; $i<count($temp) ; $i++)
                            {
                               for($j= $temp[$i]->level ; $j<=$curlevel&&$curlevel!=-1 ;$j++)
                                   echo "</div>";
                                echo $temp[$i]->getHtml() ;

                                $curlevel = $temp[$i]->level ;
                            }
                            if(count($temp)>0)
                                echo "</div>";
                        ?>

                    </div>
                </section>
<!--               dast karishode -->
                <aside id="gkSidebar" class="gkOnlyOne">

                    <div class="box nsp color">
                        <div class="splitHeader"><a href="/Home/Category/1" target="_blank">برگزیده</a></div>
                        <div class="content side catList">
                            <div class="nspArt nspCol1">
                                <a href="/Home/Single/62994" target="_blank" class="nspImageWrapper tleft fleft gkResponsive">
                                    <img class="nspImage tleft fleft gkResponsive" src="http://newsmedia.tasnimnews.com/Tasnim//Uploaded/Image/13920207164439281440091.jpg" alt="حداد عادل"></a>
                                <div class="gkArtContentWrap">
                                    <h4 class="nspHeader tleft fnone"><a href="/Home/Single/62994" target="_blank">اخبار انتخاباتی «حدادعادل»</a></h4>
                                </div>
                            </div>
                            <div class="nspArt nspCol1">
                                <a href="/Home/Single/63003" target="_blank" class="nspImageWrapper tleft fleft gkResponsive">
                                    <img class="nspImage tleft fleft gkResponsive" src="http://newsmedia.tasnimnews.com/Tasnim//Uploaded/Image/13920215093435718474481.jpg" alt="محمدباقر قالیباف"></a>
                                <div class="gkArtContentWrap">
                                    <h4 class="nspHeader tleft fnone"><a href="/Home/Single/63003" target="_blank">اخبار انتخاباتی «قالیباف»</a></h4>
                                </div>
                            </div>
                            <div class="nspArt nspCol1">
                                <a href="/Home/Single/62909" target="_blank" class="nspImageWrapper tleft fleft gkResponsive">
                                    <img class="nspImage tleft fleft gkResponsive" src="http://newsmedia.tasnimnews.com/Tasnim//Uploaded/Image/13920304091238621572241.jpg" alt="سعید جلیلی/جلیلی"></a>
                                <div class="gkArtContentWrap">
                                    <h4 class="nspHeader tleft fnone"><a href="/Home/Single/62909" target="_blank">اخبار انتخاباتی «سعید جلیلی»</a></h4>
                                </div>
                            </div>
                            <div class="nspArt nspCol1">
                                <a href="/Home/Single/63002" target="_blank" class="nspImageWrapper tleft fleft gkResponsive">
                                    <img class="nspImage tleft fleft gkResponsive" src="http://newsmedia.tasnimnews.com/Tasnim//Uploaded/Image/13920214180448940473231.jpg" alt="علی اکبر ولایتی"></a>
                                <div class="gkArtContentWrap">
                                    <h4 class="nspHeader tleft fnone"><a href="/Home/Single/63002" target="_blank">اخبار انتخاباتی «علی‌اکبر ولایتی»</a></h4>
                                </div>
                            </div>
                            <div class="nspArt nspCol1">
                                <a href="/Home/Single/63004" target="_blank" class="nspImageWrapper tleft fleft gkResponsive">
                                    <img class="nspImage tleft fleft gkResponsive" src="http://newsmedia.tasnimnews.com/Tasnim//Uploaded/Image/13920226133415493538871.jpg" alt="رضایی"></a>
                                <div class="gkArtContentWrap">
                                    <h4 class="nspHeader tleft fnone"><a href="/Home/Single/63004" target="_blank">اخبار انتخاباتی «محسن رضایی»</a></h4>
                                </div>
                            </div>
                            <div class="nspArt nspCol1">
                                <a href="/Home/Single/63001" target="_blank" class="nspImageWrapper tleft fleft gkResponsive">
                                    <img class="nspImage tleft fleft gkResponsive" src="http://newsmedia.tasnimnews.com/Tasnim//Uploaded/Image/13920218182119294494821.jpg" alt="روحانی"></a>
                                <div class="gkArtContentWrap">
                                    <h4 class="nspHeader tleft fnone"><a href="/Home/Single/63001" target="_blank">اخبار انتخاباتی «حسن روحانی»</a></h4>
                                </div>
                            </div>
                            <div class="nspArt nspCol1">
                                <a href="/Home/Single/63000" target="_blank" class="nspImageWrapper tleft fleft gkResponsive">
                                    <img class="nspImage tleft fleft gkResponsive" src="http://newsmedia.tasnimnews.com/Tasnim//Uploaded/Image/13920216195321122485661.jpg" alt="عارف"></a>
                                <div class="gkArtContentWrap">
                                    <h4 class="nspHeader tleft fnone"><a href="/Home/Single/63000" target="_blank">اخبار انتخاباتی «محمدرضا عارف»</a></h4>
                                </div>
                            </div>
                            <div class="nspArt nspCol1">
                                <a href="/Home/Single/62999" target="_blank" class="nspImageWrapper tleft fleft gkResponsive">
                                    <img class="nspImage tleft fleft gkResponsive" src="http://newsmedia.tasnimnews.com/Tasnim//Uploaded/Image/13920301190737576562811.jpg" alt="محمد غرضی"></a>
                                <div class="gkArtContentWrap">
                                    <h4 class="nspHeader tleft fnone"><a href="/Home/Single/62999" target="_blank">اخبار انتخاباتی «سیدمحمد غرضی»</a></h4>
                                </div>
                            </div>
                            <div class="nspArt nspCol1">
                                <a href="/Home/Single/62686" target="_blank" class="nspImageWrapper tleft fleft gkResponsive">
                                    <img class="nspImage tleft fleft gkResponsive" src="http://newsmedia.tasnimnews.com/Tasnim//Uploaded/Image/13920301183139218562781.jpg" alt="کاندیدا"></a>
                                <div class="gkArtContentWrap">
                                    <h4 class="nspHeader tleft fnone"><a href="/Home/Single/62686" target="_blank">جدول کامل پخش برنامه‌های تبلیغاتی کاندیداها</a></h4>
                                </div>
                            </div>
                            <div class="nspArt nspCol1">
                                <a href="/Home/Single/62955" target="_blank" class="nspImageWrapper tleft fleft gkResponsive">
                                    <img class="nspImage tleft fleft gkResponsive" src="http://newsmedia.tasnimnews.com/Tasnim//Uploaded/Image/13920301183139218562781.jpg" alt="کاندیدا"></a>
                                <div class="gkArtContentWrap">
                                    <h4 class="nspHeader tleft fnone"><a href="/Home/Single/62955" target="_blank">جدول کامل پخش برنامه‌های تبلیغاتی کاندیداها از شبکه‌های رادیویی</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="box ">
                        <h3 class="splitHeader"><a href="#">آرشیو اخبار</a></h3>
                        <div class="content">
                            <div id="calendar" class="hasDatepicker">
                                <div class="ui-datepicker-inline ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all ui-datepicker-rtl" style=""><div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-all"><a style="direction:ltr" class="ui-datepicker-next ui-corner-all" onclick="DP_jQuery_1371183094885.datepicker._adjustDate('#calendar', +1, 'M');" title="«"><span class="ui-icon ui-icon-circle-triangle-w">«</span></a><a style="direction:ltr" class="ui-datepicker-prev ui-corner-all" onclick="DP_jQuery_1371183094885.datepicker._adjustDate('#calendar', -1, 'M');" title="»"><span class="ui-icon ui-icon-circle-triangle-e">»</span></a><div class="ui-datepicker-title"><span class="ui-datepicker-month">خرداد</span>&nbsp;<span class="ui-datepicker-year">1392</span></div></div><table class="ui-datepicker-calendar"><thead><tr><th class="ui-datepicker-week-end"><span title="شنبه">ش</span></th><th class="ui-datepicker-week-end"><span title="یکشنبه">ی</span></th><th><span title="دوشنبه">د</span></th><th><span title="سه شنبه">س</span></th><th><span title="چهارشنبه">چ</span></th><th><span title="پنجشنبه">پ</span></th><th><span title="جمعه">ج</span></th></tr></thead><tbody><tr><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" " onclick="DP_jQuery_1371183094885.datepicker._selectDay('#calendar',2,1392, this);return false;"><a class="ui-state-default" href="#">1</a></td><td class=" " onclick="DP_jQuery_1371183094885.datepicker._selectDay('#calendar',2,1392, this);return false;"><a class="ui-state-default" href="#">2</a></td><td class=" " onclick="DP_jQuery_1371183094885.datepicker._selectDay('#calendar',2,1392, this);return false;"><a class="ui-state-default" href="#">3</a></td></tr><tr><td class=" ui-datepicker-week-end " onclick="DP_jQuery_1371183094885.datepicker._selectDay('#calendar',2,1392, this);return false;"><a class="ui-state-default" href="#">4</a></td><td class=" ui-datepicker-week-end " onclick="DP_jQuery_1371183094885.datepicker._selectDay('#calendar',2,1392, this);return false;"><a class="ui-state-default" href="#">5</a></td><td class=" " onclick="DP_jQuery_1371183094885.datepicker._selectDay('#calendar',2,1392, this);return false;"><a class="ui-state-default" href="#">6</a></td><td class=" " onclick="DP_jQuery_1371183094885.datepicker._selectDay('#calendar',2,1392, this);return false;"><a class="ui-state-default" href="#">7</a></td><td class=" " onclick="DP_jQuery_1371183094885.datepicker._selectDay('#calendar',2,1392, this);return false;"><a class="ui-state-default" href="#">8</a></td><td class=" " onclick="DP_jQuery_1371183094885.datepicker._selectDay('#calendar',2,1392, this);return false;"><a class="ui-state-default" href="#">9</a></td><td class=" " onclick="DP_jQuery_1371183094885.datepicker._selectDay('#calendar',2,1392, this);return false;"><a class="ui-state-default" href="#">10</a></td></tr><tr><td class=" ui-datepicker-week-end " onclick="DP_jQuery_1371183094885.datepicker._selectDay('#calendar',2,1392, this);return false;"><a class="ui-state-default" href="#">11</a></td><td class=" ui-datepicker-week-end " onclick="DP_jQuery_1371183094885.datepicker._selectDay('#calendar',2,1392, this);return false;"><a class="ui-state-default" href="#">12</a></td><td class=" " onclick="DP_jQuery_1371183094885.datepicker._selectDay('#calendar',2,1392, this);return false;"><a class="ui-state-default" href="#">13</a></td><td class=" " onclick="DP_jQuery_1371183094885.datepicker._selectDay('#calendar',2,1392, this);return false;"><a class="ui-state-default" href="#">14</a></td><td class=" " onclick="DP_jQuery_1371183094885.datepicker._selectDay('#calendar',2,1392, this);return false;"><a class="ui-state-default" href="#">15</a></td><td class=" " onclick="DP_jQuery_1371183094885.datepicker._selectDay('#calendar',2,1392, this);return false;"><a class="ui-state-default" href="#">16</a></td><td class=" " onclick="DP_jQuery_1371183094885.datepicker._selectDay('#calendar',2,1392, this);return false;"><a class="ui-state-default" href="#">17</a></td></tr><tr><td class=" ui-datepicker-week-end " onclick="DP_jQuery_1371183094885.datepicker._selectDay('#calendar',2,1392, this);return false;"><a class="ui-state-default" href="#">18</a></td><td class=" ui-datepicker-week-end " onclick="DP_jQuery_1371183094885.datepicker._selectDay('#calendar',2,1392, this);return false;"><a class="ui-state-default" href="#">19</a></td><td class=" " onclick="DP_jQuery_1371183094885.datepicker._selectDay('#calendar',2,1392, this);return false;"><a class="ui-state-default" href="#">20</a></td><td class=" " onclick="DP_jQuery_1371183094885.datepicker._selectDay('#calendar',2,1392, this);return false;"><a class="ui-state-default" href="#">21</a></td><td class=" " onclick="DP_jQuery_1371183094885.datepicker._selectDay('#calendar',2,1392, this);return false;"><a class="ui-state-default" href="#">22</a></td><td class=" " onclick="DP_jQuery_1371183094885.datepicker._selectDay('#calendar',2,1392, this);return false;"><a class="ui-state-default" href="#">23</a></td><td class=" ui-datepicker-days-cell-over  ui-datepicker-current-day ui-datepicker-today" onclick="DP_jQuery_1371183094885.datepicker._selectDay('#calendar',2,1392, this);return false;"><a class="ui-state-default ui-state-highlight ui-state-active ui-state-hover" href="#">24</a></td></tr><tr><td class=" ui-datepicker-week-end " onclick="DP_jQuery_1371183094885.datepicker._selectDay('#calendar',2,1392, this);return false;"><a class="ui-state-default" href="#">25</a></td><td class=" ui-datepicker-week-end " onclick="DP_jQuery_1371183094885.datepicker._selectDay('#calendar',2,1392, this);return false;"><a class="ui-state-default" href="#">26</a></td><td class=" " onclick="DP_jQuery_1371183094885.datepicker._selectDay('#calendar',2,1392, this);return false;"><a class="ui-state-default" href="#">27</a></td><td class=" " onclick="DP_jQuery_1371183094885.datepicker._selectDay('#calendar',2,1392, this);return false;"><a class="ui-state-default" href="#">28</a></td><td class=" " onclick="DP_jQuery_1371183094885.datepicker._selectDay('#calendar',2,1392, this);return false;"><a class="ui-state-default" href="#">29</a></td><td class=" " onclick="DP_jQuery_1371183094885.datepicker._selectDay('#calendar',2,1392, this);return false;"><a class="ui-state-default" href="#">30</a></td><td class=" " onclick="DP_jQuery_1371183094885.datepicker._selectDay('#calendar',2,1392, this);return false;"><a class="ui-state-default" href="#">31</a></td></tr></tbody></table></div></div>
                        </div>
                    </div>
                </aside>
            </div>






        </div>


    </body>
</html>