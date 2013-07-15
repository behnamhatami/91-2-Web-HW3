/**
 * Created with JetBrains PhpStorm.
 * User: alireza
 * Date: 6/4/13
 * Time: 2:04 PM
 * To change this template use File | Settings | File Templates.
 */
 var an;
var currentnavelem = null ;
function homepageSidebar()
{
    $("div.tabbed_area .LeftTopTabs li.first  a").click(function()
    {
		console.log('bye');
        $('div#content_1').show();
        $('div#content_2').hide()
        $('this').parent().attr('class','first active');
        $("div.tabbed_area .LeftTopTabs li.middle").attr('class','middle');
    });
    $("div.tabbed_area .LeftTopTabs li.middle  a").click(function()
    {
        $('div#content_2').show()
        $('div#content_1').hide();
        $('this').parent().attr('class','middle active');
        $("div.tabbed_area .LeftTopTabs li.first").attr('class','first');
    });
}
function mainNavigation()
{

	
    $.each($("section div nav.main_menu ul li"),function(index,val)
    {

       var temp = jQuery(val);
       temp.mouseover(function()
       {
           console.log("2 \n");
			console.log('kooni'+$(this).attr('data-content')+'\n');
			$.each($("section div nav.main_menu ul li"),function(index2,val2)
			{
				var temp2 = jQuery(val2) ;
				
				if(temp2.attr('class')!= "big_dropdown current_page_item")
					temp2.attr('class',"big_dropdown") ;
			});
			 if($(this).attr('class')!= "big_dropdown current_page_item")
           {
                $(this).attr('class',"big_dropdown hover") ;
           }
		  
			$.each($("section.section_big_dropdown div.block_big_dropdown"),function(index,val2)
			{
				var temp2 = jQuery(val2) ;
				temp2.hide() ;
				console.log('kiri') ;
			});
			
           $('section.section_big_dropdown div.block_big_dropdown[data-menu='+$(this).attr('data-content')+']').css({display:'block'});
           currentnavelem = $('section.section_big_dropdown div.block_big_dropdown[data-menu='+temp.attr('data-content')+']');
			
    
       });
	   
      
    });
	$('.bottom div.inner').mouseover(function()
	{
		console.log("koskesh");
		if($("section div nav.main_menu ul li[data-content="+currentnavelem.attr('data-menu')+"]").attr('class')!='big_dropdown current_page_item')
            $("section div nav.main_menu ul li[data-content="+currentnavelem.attr('data-menu')+"]").attr('class','big_dropdown');
        
		currentnavelem.css({display:'none'});
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

       // $(".catMain a img",elem).attr('src',$('img',$(this)).attr('bigsrc'));
        $(".catMain a img",elem).attr('src',$('img',$(this)).attr('src'));
        $(".catMain h4 a",elem).attr('href',$('h4 a',$(this)).attr('href'));
        $(".catMain h4 a",elem).text($('h4 a',$(this)).text());
        console.log($('h4 input',$(this)).attr('value'));
        $(".catMain div.AbsText ",elem).text($('input',$(this)).attr('value'));
    });
}

function categoryView()
{
    $('.catTop.nspArt.nspCol30').mouseover(function(){
        $('.nspHoverOverlay',$(this)).css({top:0});
        $('.nspHoverOverlay',$(this)).attr('class','nspHoverOverlay active');
       // $('.nspHeader.tleft.fnone',$(this)).hide() ;
        $('img.nspImage.tleft.fleft.gkResponsive',$(this)).css({opacity:0.5});
    });
    $('.nspArt.nspCol30').mouseout(function(){
        $('.nspHoverOverlay',$(this)).css({top:'100%'});
        $('.nspHoverOverlay',$(this)).attr('class','nspHoverOverlay');

   //     $('.nspHeader.tleft.fnone',$(this)).show() ;
        $('img.nspImage.tleft.fleft.gkResponsive',$(this)).css({opacity:1});
    });
}

function likeDislike()
{
    $('.commentInfoBar  .rateUpLink').click(function ()
    {
        var temp = jQuery($(this).parent());
        $.getJSON('../ajax',{'action' : 'pos','id':$(this).parent().parent().parent().attr('id')},function(data,status,xhr){
            $('.ratingUp',temp).text(data['pos']);
            $('.ratingDown',temp).text(data['neg']);
        });
    });
    $('.commentInfoBar  .rateDownLink').click(function ()
    {
        var temp = jQuery($(this).parent());
        $.getJSON('../ajax',{'action' : 'neg','id':$(this).parent().parent().parent().attr('id')},function(data,status,xhr){
            $('.ratingUp',temp).text(data['pos']);
            $('.ratingDown',temp).text(data['neg']);
            console.log(data['neg']);
            console.log(data['pos']);
            console.log(  $('.ratingDown',$(this).parent()));
        });
    });
    $('.commentInfoBar .commentRating a.newComment').click(function(){
        $('.commentReply').slideToggle();
        $('.commentReply').attr('parentid',$(this).parent().parent().parent().attr('id'));

    });
    $('.comReply').click(function(){
        $('.commentReply').slideToggle();
        $('.commentReply').attr('parentid',-1);

    });
    $('div.oncommentReply a').click(function()
    {

        //$('.commentReply').slideToggle();
        $('.commentReply').show();
        $('.commentReply').attr('parentid',$(this).parent().parent().parent().attr('id'));
    });
}
function newComment()
{

    $('.commentsend').click(function()
    {
        $('.commentReply').slideToggle();
		
        $.getJSON('../ajax',{'news':$(this).parent().parent().attr('newsid'),'action':'create',
		'content' : $('textarea',$(this).parent().parent()).val(),'parent' :$(this).parent().parent().attr('parentid'),
		'composer':$('input',$(this).parent().parent()).val()},function (data,status,xhr)
        {
            if(data['result']!= 'yes')
                console.log('kiram dahanet');
            //        TODO json
            var commentbox = jQuery("<div class='commentBox' id="+data['id']+"></div>");

            var commentInfoBar = jQuery("<div class='commentInfoBar'></div>");
            commentInfoBar.append(jQuery("<div class='commentUser'>"+data['composer']+"</div>"));
            commentInfoBar.append(jQuery( "<div class='oncommentReply'> <a>پاسخ</a></div>"));

            var commentRating = jQuery("<div class='commentRating'></div>");
            commentRating.append(jQuery("<div class='ratingDown' >"+data['neg']+"</div>"));
            commentRating.append(jQuery("<a  class='rateDownLink' ></a><a  class='rateUpLink' ></a>"));
            commentRating.append(jQuery("<div class='ratingUp' >"+data['pos']+"</div>"));

            commentInfoBar.append(commentRating);

            var commentContent = jQuery("<div class='commentContent'></div>");
            commentContent.append(jQuery("<img style='padding-left:3px;' src='../../../../web/bundles/news/img/comments.gif' >"+data['content']+"</img>"));
            commentContent.append('<div></div>');

            commentbox.append(commentInfoBar);
            commentbox.append(commentContent);
            if(data['parent'] >0)
                $('div.commentBox[id='+data['parent']+']').append(commentbox);
            else
                $('div.comment.box.nsp.clear.light.header').append(commentbox);
            likeDislike();
            });
        console.log('salam');


    });
    $('.commentcancel').click(function()
    {
        $('html').css('opacity',1);
        $('.commentReply').hide();
        //        TODO json
    });
}

function secondaryMenu()
{
    var temp = function()
    {
      var margin = $('.ticker-swipe').css('margin-right');
      if(margin == '540px')
          $('.ticker-swipe').css('margin-right','540px');
      else
          $('.ticker-swipe').css('margin-right',(parseInt(margin.substr(0,margin.length-2))+20)+'px');


    };
    var changenews = function ()
    {
        $('.ticker-swipe').css('margin-right','0px');
        var numofnews =  parseInt($('.ticker-swipe').attr('numofnews'));
        var index= parseInt($('.ticker-swipe').attr('id'));
        $('.ticker-wrapper[id='+index+']').show();
        var prev = index-1;
        if(index >0) $('.ticker-wrapper[id='+prev+']').hide();
        else $('.ticker-wrapper[id='+numofnews+']').hide();

        if(index < numofnews)
            index=index+1 ;
        else
            index = 0 ;
        $('.ticker-swipe').attr('id',index);
    };
    setInterval(temp,50);
    setInterval(changenews,3000);
}


function search()
{
  $('#withdate').click(function ()
    {
        if(!$(this).is(':checked'))
            $('div.dates').hide() ;
        else
            $('div.dates').show() ;
    });

    $('input#allservices').click(function(){
        if($(this).is(':checked'))
            jQuery($(this).parent().parent().parent().children('tr')[1]).hide();
        else
            jQuery($(this).parent().parent().parent().children('tr')[1]).show();
    });

  $('div.search-container form').submit(function ()
  {
      if(!$('#withdate').is(':checked'))
      {
          $('input[name=dateto]').remove();
          $('input[name=datefrom]').remove();
      }
      if($('input#allservices').is(':checked'))
      {
          $('table.service-container input').remove();
      }



 });
}

function backTop()
{
    $(window).scroll(function ()
    {
       if($(window).scrollTop()>250)
       {
           console.log('backtotop');
           $('div#backtotop').show() ;
           var opacity = $(window).scrollTop()>400 ? 1 : $(window).scrollTop()/400 ;
           $('div#backtotop').css('opacity',opacity);

       }
       else if ($(window).scrollTop()<150)
       {
           $('div#backtotop').hide() ;

       }
       else
       {
           var opacity = $(window).scrollTop()>250 ? 1 : $(window).scrollTop()/250 ;
           $('div#backtotop').css('opacity',opacity);

       }

    });
    $('div#backtotop').click(function(){
            var temp = parseInt($(window).scrollTop()/50) ;
            var interval = setInterval(function (){$(window).scrollTop(Math.min($(window).scrollTop()-50),0)},20);
           setTimeout(function(){clearInterval(interval)},(temp+2)*20+1) ;

    });

}

function Subscription ()
{
    $('.block_email_top form').submit(function(){
        $.getJSON('../ajax',{'action' : 'subscribe','email': $('#email-box').val(),'id' : $(this).attr('group-id') },function (data,status,xhr)
        {
            if(data['result']=='yes')
                $('.block_email_top').append('ثبت نام شما با موفقیت انجام شد');
        });
    });
    $('.block_email_top input[type=button]').click(function(){
        $.getJSON('../ajax',{'action' : 'subscribe','email': $('#email-box').val(),'id' : $('.block_email_top form').attr('group-id') },function (data,status,xhr)
        {
            if(data['result']=='yes')
                $('.block_email_top form').append('ثبت نام شما با موفقیت انجام شد');
        });
    });
}