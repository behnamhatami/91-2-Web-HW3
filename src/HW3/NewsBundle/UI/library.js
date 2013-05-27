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
           $(this).attr('class',"big_dropdown hover") ;
           $('section.section_big_dropdown div.block_big_dropdown[data-menu='+temp.attr('data-content')+']').css({display:'block'});
           currentnavelem = $('section.section_big_dropdown div.block_big_dropdown[data-menu='+temp.attr('data-content')+']');

       });
       temp.mouseout(function(e)
       {
           var position = currentnavelem.offset() ;
           if(position.top > e.clientY)
           {
               $(this).attr('class','big_dropdown');
               currentnavelem.css({display:'none'});
               currentnavelem = null ;
           }


       });
    });
    $.each($('section.section_big_dropdown div.block_big_dropdown'),function(index,val){
       var temp = jQuery(val) ;

       temp.mouseleave(function(e)
       {
            $(this).css({display:'none'});
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