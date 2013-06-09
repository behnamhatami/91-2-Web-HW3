/**
 * Created with JetBrains PhpStorm.
 * User: alireza
 * Date: 6/4/13
 * Time: 2:04 PM
 * To change this template use File | Settings | File Templates.
 */
var currentnavelem = null ;
function mainNavigation()
{

    $.each($("section div nav.main_menu ul li"),function(index,val)
    {

       var temp = jQuery(val);
       temp.mouseover(function()
       {
           console.log("2 \n");
           if($(this).attr('class')!= "big_dropdown current_page_item")
           {
                $(this).attr('class',"big_dropdown hover") ;
           }
           $('section.section_big_dropdown div.block_big_dropdown[data-menu='+temp.attr('data-content')+']').css({display:'block'});
           currentnavelem = $('section.section_big_dropdown div.block_big_dropdown[data-menu='+temp.attr('data-content')+']');

       });
       temp.mouseout(function(e)
       {
           console.log("1 \n");
           var position = currentnavelem.offset() ;
           console.log(position.top+" "+ e.clientY) ;
           if(position.top > e.clientY)
           {
               if($(this).attr('class')!='big_dropdown current_page_item')
                    $(this).attr('class','big_dropdown');
               currentnavelem.css({display:'none'});
               //currentnavelem = null ;
           }


       });
    });
    $.each($('section.section_big_dropdown div.block_big_dropdown'),function(index,val){
       var temp = jQuery(val) ;

       temp.mouseleave(function(e)
       {
           console.log("3 \n");
           $(this).css({display:'none'});
           $.each($("section div nav.main_menu ul li"),function(index2,val2)
           {

               var temp2 = jQuery(val2);
               if(temp2.attr('class')!="big_dropdown current_page_item")
                    temp2.attr('class','big_dropdown');
           });
       });

    });
}

function middleContent()
{
    $('#SliderPaging li').click(function()
    {
        $(this).attr('class','active');
        var temp = $(this).attr('act');
        console.log(temp);
        $('#'+temp).css({display:'block'});

        if(temp == 'slide_0')
            temp = 'slide_1';
        else
            temp='slide_0' ;
        $('#'+temp).css({display:'none'});

        $('#SliderPaging li[act='+temp+']').attr('class','');

    });

    $('.nspArt.nspCol1').mouseover(function(){
        $('.nspHoverOverlay').css({top:0});

        $('.nspHeader.tleft.fnone.MainHeader').hide() ;
        $('.gkResponsive img.nspImage.noborder').css({opacity:0.5});
    });
    $('.nspArt.nspCol1').mouseout(function(){
        $('.nspHoverOverlay').css({top:'100%'});
        $('.nspHeader.tleft.fnone.MainHeader').show() ;
        $('.gkResponsive img.nspImage.noborder').css({opacity:1});
    });


}

function catContent()
{
    $('.nspLinks ul.nspList li').mouseover(function()
    {

       console.log('salam');
       var temp =$('.nspArts.aright[catid='+$(this).parent().attr('catlist')+']')[0];
      // console.log(temp);
       var elem = jQuery(temp);
       console.log($(elem,".catMain a")+"salam");
       $(".catMain a",elem).attr('href',$('h4 a',$(this)).attr('href'));
        $(".catMain a img",elem).attr('src',$('img',$(this)).attr('bigsrc'));
        $(".catMain h4 a",elem).attr('href',$('h4 a',$(this)).attr('href'));
        $(".catMain h4 a",elem).text($('h4 a',$(this)).text());
        console.log($('h4 input',$(this)).attr('value'));
        $(".catMain div.AbsText ",elem).text($('input',$(this)).attr('value'));
    });
}

