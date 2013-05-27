<?php
$menutitle = array() ;
$menutag = array() ;
$menutaghidden = array() ;
$catcontent = array() ;
class Newsent
{
    public $title,$abstract,$picture,$alt,$url,$bigsrc;

    function __construct()
    {
       $this->alt = "";
       $this->abstract = "" ;
       $this->bigsrc = " ";
    }



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
$html = get_page($url);


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
        $temp->abstract = $e->find('input',0)->plaintext ;
        $catlistelem [] = clone $temp ;
    }
    $res="";
    for($i=0 ; $i<count($catlistelem) ; $i++)
    {
        $result[$i]="<li class='even'><img class='nspImage tleft fleft gkResponsive' src=".$catlistelem[$i]->picture.
            " bigsrc=".$catlistelem[$i]->bigsrc." alt=".$catlistelem[$i]->alt." >
            <h4><a href=".$catlistelem[$i]->url." target='_blank'>".$catlistelem[$i]->title."</a></h4>
            <input type='hidden' class='abstractText' value=".$catlistelem[$i]->abstract."></li>";
        $res=$res.$result[$i];
    }

    return $res ;

}

?>