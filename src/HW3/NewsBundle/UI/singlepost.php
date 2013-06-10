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

            </div>






        </div>


    </body>
</html>