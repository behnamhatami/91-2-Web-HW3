<?php
$menutitle = array() ;
$menutag = array() ;
$menutaghidden = array() ;
$catcontent = array() ;
class Newsent
{
    public $title,$abstract,$picture,$alt,$url,$bigsrc,$date,$id,$group,$content,$optionaltext;

    function __construct()
    {
       $this->alt = "";
       $this->abstract = "" ;
       $this->bigsrc = " ";
       $this->group="سیاسی";
       $this->id=0;
       $this->date = "1390/1/1";
       $this->content="" ;
       $this->optionaltext = "";
    }



}



class myComment
{
    public $content,$date,$user,$level,$replyto,$id;
    function __construct()
    {
        $this->replyto="";
        $this->id=0 ;
        $this->date = "1390";
    }
    public function getHtml() //without end </div>
    {
        echo "  <div class='commentBox' id=".$this->id.">
                            <div class='commentInfoBar'>
                                <div class='commentUser'>".$this->user."</div>
                                <div class='Commentdate'>".$this->date."</div></div>
                            <div class='commentContent'>
                                <img style='padding-left:3px;' src='Images/comments.gif' alt=''>.".$this->content."<div>
                                </div>
                            </div>";

    }
}

function getcomment()
{
    $temp = array() ;
    $temp[0] = new myComment();
    $temp[1] = new myComment();
    $temp[2] = new myComment();
    $temp[3] = new myComment();

    $temp[0]->content = $temp[1]->content ="salam alireza chetori" ;
    $temp[2]->content = $temp[3]->content ="salam alireza chetori" ;
    $temp[0]->user = $temp[1]->user ="alireza";
    $temp[2]->user = $temp[3]->user ="alireza";

    $temp[0]->level=0 ;
    $temp[1]->level=1 ;
    $temp[2]->level=2 ;
    $temp[3]->level=1 ;
    return $temp     ;
}

function getCompleteNews()
{
    $temp = new Newsent() ;
    $temp->picture="http://newsmedia.tasnimnews.com/Tasnim//Uploaded/Image/1392031612454330641122.jpg";
    $temp->bigsrc = "http://newsmedia.tasnimnews.com/Tasnim//Uploaded/Image/13920210185314834455943.jpg";
    $temp->optionaltext="رضایی در گفت‌وگو با العالم:";
    $temp->title="برای حل بحران سوریه گروه ۳+۵ تشکیل می‌دهم/ دولتی‌ها را از اقتصاد خارج می‌کنم ";
    $temp->content="
<p style='text-align: justify;'>
	به گزارش گروه سیاسی خبرگزاری تسنیم، محسن رضایی کاندیدای انتخابات ریاست‌جمهوری در گفتگو با شبکه خبری العالم، با معرفی خود به عنوان یک اقتصاد دان مهمترین اولویت برنامه هایش را انقلاب اقتصادی&nbsp; عنوان کرد و گفت : یک تحول بزرگ اقتصادی را ان شاء الله در کشور به وجود می آوریم؛ اولا اقتصاد تک محصولی را که عمدتا به نفت متکی بوده به اقتصاد چند محصولی تبدیل می کنیم یعنی کشاورزی ایران، گردشگری، صنعت ومعدن را به میزان نفت گسترش می دهیم.</p>
<p style='text-align: justify;'>
	وی گفت: مساله دیگر در اقتصاد ایران بازار پول است، ما بازار سرمایه را اصلاح می کنیم وبا توجه به اینکه زمینه برای تجارت در کشور در منطقه و حتی سطح بین الملل وجود دارد، با وجود تحریمها فرصت های تجاری خوبی داریم که از آن استفاده می کنیم.</p>
<p style='text-align: justify;'>
	نامزد انتخابات ریاست‌جمهوری در خصوص تولید ملی خاطرنشان کرد: در شهرها و استانهای ایران ظرفیت ها و مزیت های فراوانی وجود دارد که از این مزیت‌ها برای تولید ملی استفاده می کنیم، اقتصاد ایران را به صورت فدرالیزم درخواهیم آورد یعنی ایالت های اقتصادی تشکیل می دهیم مثلا خوزستان، آذربایجان و سیستان و بلوچستان خود هریک ایالت اقتصادی می شود.</p>
<p style='text-align: justify;'>
	رضایی افزود: در مورد نقش دولت در اقتصاد هم تحول ایجاد می کنم، یعنی پای دولت را از اقتصاد بیرون می کشم. اقتصاد باید مردمی باشد، بخش خصوصی بخش تعاونی کسب و کارهای خانگی زیادی در ایران راه اندازی می کنیم تا ان شاءالله تحولی دراقتصاد ایران رقم بزنیم.</p>
<p style='text-align: justify;'>
	وی با اشاره به تحریم ها و رابطه آن با شکوفایی اقتصادی، گفت: این تحریم ها عمدتا دو مساله یعنی فروش نفت و جابجایی درآمدهای نفتی را هدف قرار داده و اقتصاد ما به دلیل متکی بودن برنفت، آسیب پذیر شده است؛ اما وقتی که صادرات غیرنفتی فراوانی داشته و تولید ملی را رونق دهیم، بسیاری از نیازهای خود را با کیفیت بهتر تولید می کنیم و تحریم‌ها نمی تواند مانع باشد؛ ولی ما نمی خواهیم همیشه تحریم ها ادامه یابد. در بحث های سیاست خارجی فضای جدیدی در روابط بین‌المل ومنطقه ایجاد می کنیم و یک حرکت جدیدی را شروع می کنیم که تحریم‌ها هم روز به روز کاهش یابد و از سر راه ملت ایران برداشته شود.</p>
<p style='text-align: justify;'>
	نامزد انتخابات ریاست جمهوری در پاسخ به این سئوال که آیا رفع تحریم ها با لغو فعالیت هسته ای ایران میسر خواهد شد، تصریح کرد: ما به فرمول‌هایی رسیدیم و بازی برد-برد را شروع می کنیم و کاری خواهیم کرد که نگرانی هایی در سطح بین الملل وجود نداشته باشد؛ ولی ما هم به منافع ملی وارزش‌های انقلاب پایبند باشیم ، راه حل وجود دارد ما مذاکراتی با اتحادیه اروپا در زمان سولانا داشتیم و درجلسات اخیر نیز با اروپائی ها راه حل‌هایی وجود دارد که با 5+1به تفاهم برسیم و مسیرهسته ای یک مسیر کاملا مطمئنی باشد هم برای دنیا وهم دستاوردهامونو ازدست ندهیم.</p>
<p style='text-align: justify;'>
	رضایی‌درباره تنش روابط ایران با کشورهای عربی و خلیج فارس، گفت: دو مشکل وجود دارد که باید حل شود؛ امریکا و غرب نمی خواهند کشورهای منطقه بدون اسرائیل کنار هم بنشینند و اصرار دارند که اسرائیل هم باید عضو ما باشد و مشکل دوم تکروی در منطقه است. ان شاءالله در دولتی که تشکیل دهیم اولین جلسه بین سران منطقه را برگزار خواهیم کرد و یک همکاری دسته جمعی را شروع می کنیم.</p>
<p style='text-align: justify;'>
	ما تا حالا همکاری مان دسته جمعی نبوده و کشورهای ایران، مصر، عربستان و ترکیه به تنهایی فعالیت دارند. ما همکاری جدید دسته جمعی را آزمایش خواهیم کرد و بنای این همکاری نیز امنیت و توسعه است، بنابراین همه نیاز به امنیت و توسعه دارند. دلیلی ندارد که با هم همکاری نکنیم.</p>
<p style='text-align: justify;'>
	وی تاکید کرد: کشورهای عربی برادران ما هستند و دلیلی وجود ندارد که با هم اختلاف داشته باشیم. آنقدر اهداف بزرگ و مشترک داریم که این اختلافات در برابر آنها چیز مهمی نیست. ما می توانیم باهم تفاهم داشته باشیم و حرکت جدیدی را آغاز کنیم.</p>
<p style='text-align: justify;'>
	نامزد انتخابات ریاست جمهوری دررابطه روابط ایران و کشورهای همسایه و موضوع سوریه، افزود: فکر نمی‌کنم در این باره مشکلی داشته باشیم. من از فرمول پنج به علاوه سه استفاده می‌کنم. پنج کشور همسایه سوریه یعنی ترکیه، عراق، اردن، فلسطین و لبنان؛ به علاوه ایران، عربستان و مصر. من پیشنهاد خواهم داد که این گروه تشکیل شود و بر جلسه مشترکی که بین مردم سوریه و دولت و معارضان سوری - نه غیرسوری- تشکیل می شود نظارت کنند. در واقع دولت، مردم و معارضان سوری درباره برنامه ای بر محور دموکراسی با یکدیگر هماهنگ شوند و 3+5 هم نظارت کند و برای این منظور کمک کند. حل بحران سوریه اکنون همکاری دسته جمعی را می طلبد و فکر می کنم می توان مسئله را حل کرد و درگیری را پایان داد.</p>
<p style='text-align: justify;'>
	رضایی درباره ادعای غرب مبنی بر اینکه مسائل حساس ایران در دست سپاه پاسداران قرار دارد، گفت: پس از پایان جنگ اقتصاد ایران اقتصادی فروپاشیده‌ای بود. پیمان کاری در آن صورت نمی گرفت و خیلی از کارآفرینان به خارج از کشور رفته بودند. ایران کشوری جنگ زده بود. نیروهای مسلح ایران هم بیش از پنج یا شش هزار تجهیزات مهندسی داشت که اگر از آنها استفاده نمی شد، آسیبی هم به کشور وارد می شد و هم اینکه این تجهیزات از بین می رفت و فرسوده می شد.</p>
<p style='text-align: justify;'>
	وی خاطرنشان کرد: از این رو، دولت از سپاه درخواست کمک کرد و ده ها سد و اتوبان و جاده با کمک سپاه در کشور ساخته شد. پس از مدتی اقتصاد باید مردمی می شد. از سال 1384 که سیاست های اصل 44 ابلاغ شد، باید همه وزارتخانه ها و همه دولتی ها چه نظامی ها و غیر نظامی ها باید آرام آرام از اقتصاد خارج می شدند و اقتصاد به دست مردم واگذار می شد. من همین کار را می کنم؛ یعنی با سیاست های اصل 44 که تنظیم شده، کاری خواهیم کرد که نه تنها نیروهای مسلح بلکه دولتی ها هم از اقتصاد خارج شوند و اقتصاد از دست آنها آزاد شود و به دست مردم بیفتد.</p>
<p style='text-align: justify;'>
	نامزد انتخابات ریاست‌جمهوری درباره اینکه در صورت پیروزی چه چیزی وجه تمایز دولت او با دولت سابق خواهد بود، گفت: اولین وجه تمایز دولت من اقتصاد خواهد بود. من اقتصاد دان هستم و برنامه های مفصلی برای تحول اقتصاد ایران آماده کرده ام، اقتصاد ، ایران را در مسیر تولید و سرمایه گذاری هدایت می کند. مسئله بازارها، مسئله بخش خصوصی، مردم در اقتصاد جدی گرفته می شود. مسئله دوم توجه به مردم است. شعار من سلام بر زندگی است؛ یعنی ما در این دوره چهار ساله همه توجه خود را به مردم معطوف می کنیم.</p>
<p style='text-align: justify;'>
	رضایی ادامه داد: شغل ایجاد می‌کنیم، گرانی ها را حل می کنیم. کیفیت زندگی مردم را ارتقاء می دهیم و استانداردهای زندگی را تقویت می کنیم. مسائل سلامت و بهداشت و درمان، اخلاق در سیاست، آرامش در خانواده ها را جدی می گیریم. در حقیقت، محور برنامه های من زندگی مردم است.</p>
<p style='text-align: justify;'>
	وی در پاسخ به پرسشی درباره بزرگ ترین چالش پیش روی ایران و این که آیا شبح جنگ همچنان بر منطقه سایه خواهد افکند؟ گفت: اگر من دولت را به دست گیرم، امنیت و صلح را در منطقه محور قرار خواهیم داد. ما اکنون در افغانستان، بحرین، عراق، سوریه چالش های خیلی زیادی داریم. هیچ جای دنیا به اندازه منطقه ما ناامن نیست. ما ان شاء الله تحرکی را با خود کشورهای منطقه آغاز می کنیم که امنیت را به منطقه برگرداند و صلح و دوستی و توسعه را تقویم کنیم. بنابراین، هیچ دلیلی وجود ندارد که ما نگران باشیم.</p>
<p style='text-align: justify;'>
	من هیچ وقت نگران آینده نیستم، بالعکس امیدوارم که وضع منطقه ما به سوی امنیت خواهد رفت. در دوران ما بهترین وضع امنیت در منطقه شکل خواهد گرفت و همکاری ها و دوستی ها هم تقویت می شود.</p>
<p style='text-align: justify;'>
	نامزد انتخابات ریاست جمهوری در مورد حضور اقشار و اقوام مختلف در دولت وی اظهار داشت: ان شاء الله در دولت خود به همه اقوام ایرانی نقش می‌دهیم و به همین دلیل، نام دولت من، دولت فراگیر است. البته ما در دوران مقدس سرداران بزرگی از خوزستان داشتیم. شهید بزرگوار علی هاشمی که یکی از قهرمانان بزرگ ملی ایران است، از دشت آزادگان هستند. امیر شمخانی که سالها وزیر دفاع ایران بودند و یکی از فرماندهان برجسته سپاه بودند و بعدا در ارتش هم فرمانده نیروی دریایی شدند. اینها از برادران عرب ما بودند و پست های بسیار مهمی گرفتند.</p>
<p style='text-align: justify;'>
	رضایی افزود: ولی در مسائل سیاسی نه تنها قوم عرب، بلکه اکثر اقوام ایرانی نتوانستند نقشی فعال پیدا کنند مخصوصا منطقه زاگرس و جنوب. این دو منطقه هنوز آن فرصت را پیدا نکرده است، اما ان شاء الله در دولت ما،توانایی و پایبندی به نظام، شرط همکاری با دولت است.</p>
<p style='text-align: justify;'>
	وی همچنین در خصوص فعالیت خود در صحنه انتخابات ایران، افزود: من مستقل وارد انتخابات شدم و به همین دلیل تاکنون در ائتلاف‌هایی که شکل گرفته ورود پیدا نکردم و تلاشم این است از همه گروه‌ها استفاده کنم، چون وضعیت اقتصادی و سیاسی طوری است که باید از همه گروه‌ها بهره برداری شود. درعین حال دو شرط برای تشکیل دولتم دارم، نخست این که افراد کابینه‌ام کارامد وتوانمند باشند ودوم اینکه نظام و رهبری را قبول داشته باشند.</p>
<p style='text-align: justify;'>
	نامزد انتخابات ریاست‌جمهوری تصریح کرد: حالا فرقی ندارد که اصلاح طلب باشد یا اصولگرا، ما بدون توجه به وابستگی های جناحی همکارانمان را تعیین می‌کنیم و برای من بیشتر کارآمدی افراد مهم است تا بتوانیم وضعیت کشور را با قدرت بیشتر اداره کنیم. از همه اقوام استفاده می شود و در حقیقت کشور را بر اساس عدالت سیاسی و عدالت اقتصادی اداره خواهیم کرد.</p>
<p style='text-align: justify;'>
	انتهای پیام/</p>                          ";
        $temp->abstract="خبرگزاری تسنیم: کاندیدای انتخابات ریاست جمهوری با بیان اینکه حل بحران سوریه اکنون همک
        اری دسته جمعی را می‌طلبد، گفت: من در این رابطه از فرمول ۳+۵ استفاده می‌کنم.";
    return $temp ;
}
function getCategoryNews()
{
    $temp = array() ;
    $temp[0]=$temp[1] = getCompleteNews();
    return $temp ;
}
function get_page($url)
{
    $field_array= array(
        'Accept' => 'text/html',
        'Accept-Language' => 'en-US,en;q=0.5',
        'Cache-Control' => 'max-age=0',
        'Connection' => 'keep-alive',
        'Host' => 'cinematicket.org',
        'User-Agent' => 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:19.0) Gecko/20100101 Firefox/19.0'
    );

    $curl_request_headers=array();

    foreach ($field_array as $key => $value) {
        $curl_request_headers[]="$key: $value";
    };

    session_write_close();
    $curl_url = $url ;
    $curl_handle = curl_init();
    curl_setopt($curl_handle,CURLOPT_COOKIE,'__utma=217119108.1168416451.1364750461.1364750461.1364752762.2; __utmc=217119108; __utmz=217119108.1364750461.1.1.utmcsr=(direct)|utmccn=(direct)|utmcmd=(none); ASP.NET_SessionId=5ppzrf55kzwxln45slti3jqh; __utmb=217119108.4.10.1364752762');
    curl_setopt($curl_handle, CURLOPT_URL, $curl_url);
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_HEADER, 1);
    curl_setopt($curl_handle, CURLOPT_HTTPHEADER, $curl_request_headers);

    $result = curl_exec($curl_handle);

    curl_close($curl_handle);
    if($result == false)
        return false ;
    $htmlStr = substr($result,strpos($result,"\r\n\r\n"));
    $html=str_get_html($htmlStr);
    return $html ;
}


include_once('./simplehtmldom_1_5/simple_html_dom.php');
$url = "http://www.tasnimnews.com/" ;
$html = file_get_html($url);
//$html = get_page($url);


function initializeVars()
{
    global $menutitle ;
    global $menutag ;
    global $menutaghidden ;
    global $html ;

    $menutitle[0] ="صفحه اصلی" ;
    $menutitle[1]= "عناوین اخبار";
    $menutitle[2] = "سیاسی";
    //$menutitle[3] ="بین الملل";
    //$menutitle[4] = "بیداری اسلامی";
    $menutitle[3] ="فرهنگی";
    $menutitle[4] ="اقتصادی";
    $menutitle[5] ="ورزشی";
    $menutitle[6] ="اجتماعی";
    $uppermenu = array();

    $uppermenuhidden = array() ;
    $temp = new Newsent() ;
    //echo $html ;
    foreach($html->find('#slide_0 li') as $element)
    {
        $temp->picture = $element->find('img',0)->src ;
        $temp->alt = $element->find('img',0)->alt ;
        $temp->title = $element->find('h4',0)->plaintext ;
        $temp->url = $element->find('h4 a',0)->href ;
        $uppermenu[]= clone $temp ;
    }
    foreach($html->find('#slide_1  li') as $element)
    {
        $temp->picture = $element->find('img',0)->src ;
        $temp->alt = $element->find('img',0)->alt ;
        $temp->title = $element->find('h4 ',0)-> plaintext;
        $temp->url = $element->find('h4 a',0)->href ;
        $uppermenuhidden[]= clone $temp ;
    }

     for($i=0 ; $i<count($uppermenu) ; $i++)
     {
            $menutag[$i]="<img class='nspImage' src=".$uppermenu[$i]->picture."  alt=".$uppermenu[$i]->alt."><h4><a href=".$uppermenu[$i]->url." target='_blank'>".$uppermenu[$i]->title."</a></h4>";
     }
     for($i=0 ; $i<count($uppermenuhidden) ; $i++)
    {
        $menutaghidden[$i]="<img class='nspImage' src=".$uppermenuhidden[$i]->picture."  alt=".$uppermenuhidden[$i]->alt.">
                                                    <h4><a href=".$uppermenuhidden[$i]->url." target='_blank'>".$uppermenuhidden[$i]->title."</a></h4>";
    }

}
function allCatContent()
{
    global $catcontent ;
    global $html ;
    foreach($html->find('.gkMainbodyTop') as $e)
    {
        $id = $e->find('div.nspMain div.nspArts',0)->catid ;
        $catcontent[$id] = array('html'=>singleCatContent($id),'group'=>$e->find('div.catHeader div a',0)->plaintext);
        //echo print_r($catcontent[$id]) ;
    }

}
function singleCatContent($id)
{
    global $html ;
    $catlistelem =array() ;
    $result = array() ;
    $wrapper = $html->find('.gkMainbodyTop .catList[catlist='.$id.']',0);
    $temp = new Newsent();
    foreach($wrapper->find('li') as $e)
    {
        $temp->picture = $e->find('img',0)->src ;
        $temp->bigsrc = $e->find('img',0)->bigsrc ;
        $temp->alt = $e->find('img',0)->alt ;
        $temp->url = $e->find('h4 a',0)->href ;
        $temp->title = $e->find('h4 a',0)->plaintext ;
        $temp->abstract = $e->find('input',0)->value ;
        $catlistelem [] = clone $temp ;
    }
    $res="";
    for($i=0 ; $i<count($catlistelem) ; $i++)
    {
        $result[$i]="<li class='even'><img class='nspImage tleft fleft gkResponsive' src=".$catlistelem[$i]->picture.
            " bigsrc=".$catlistelem[$i]->bigsrc." alt=".$catlistelem[$i]->alt." >
            <h4><a href=".$catlistelem[$i]->url." target='_blank'>".$catlistelem[$i]->title."</a></h4>
            <input type='hidden' class='abstractText' value='".$catlistelem[$i]->abstract."' ></li>";
        $res=$res.$result[$i];
    }

    return $res ;

}

?>