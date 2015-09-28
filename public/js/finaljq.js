$(document).ready(function()
{	 	
	
		if ($.browser.msie && $.browser.version<9.0)
		{
				
				$(".selectionbox").css({'border':"1px dashed #888888"});
			    $(".details").css({'border':"1px dashed #888888"});
		}
		
/*	$(".variables").hover(function(e)
	{	
		$(".variables").removeClass("hovered");
		$(this).addClass("hovered");
	}); */
	$(".variables").click(function(e)
	{
	//variables declaration
	var detail=$(this).attr('det');
	var top=parseInt($(this).attr('y'));
	var top1=parseInt($(this).attr('y'))-parseInt($(".arrow").height());
	var left1=parseInt($(this).attr('x'));
	var top3=parseInt($(this).attr('y1'));
	var top2=parseInt($(this).attr('y1'))-parseInt($(".arrow").height());
	var left2=parseInt($(this).attr('x1'));
	var mleft=(-parseInt($(this).attr('bleft')));
	var mleft1=(-parseInt($(this).attr('bleft1')));
	var mtop=(-parseInt($(this).attr('btop')));
	var mtop1=(-parseInt($(this).attr('btop1')));
	//
		//default actions
		$(".image1").height($(this).attr('ht'));
		$(".image1").width($(this).attr('wt'));
		
	
		$(".variables").removeClass("selected");
			$(this).addClass("selected");
		$(".variables").removeClass("hovered");
		
		$(".arrow").find(".details").fadeOut(20);
		$(".arrow1").find(".details").fadeOut(20);
		//
		
		
		if(($(this).attr('arr')=='12'))//for both arrows
		{	
				$(".selectionbox").animate({left:$(this).attr('x1'),top:$(this).attr('y1'),height:$(this).attr('ht'),width:$(this).attr('wt')},0).fadeIn(200);
				
				$(".arrow").animate({opacity:1.0,left:left1,top:top1},200,function(){      $(".arrow").find(".details").html(detail); $(".arrow").find(".details").fadeIn(10); $(".arrow1").css({left:left1,top:top-2}); $(".arrow1").animate({opacity:1},200);          });
		}
		else if(($(this).attr('arr'))=='1')//for arrow pointing downwards
			{	
				
				$(".arrow1").animate({opacity:0},20);
				$(".selectionbox").animate({left:$(this).attr('x1'),top:$(this).attr('y1'),height:$(this).attr('ht'),width:$(this).attr('wt')},0).fadeIn(200);;
	
				$(".arrow").animate({opacity:1.0,left:left1,top:top1},200,function(){   $(".arrow").find(".details").html(detail); $(".arrow").find(".details").fadeIn(5);});
				
			}
			else //for arrow pointing upwards
			{
				$(".arrow").animate({opacity:0},20);
				$(".selectionbox").animate({left:$(this).attr('x1'),top:$(this).attr('y1'),height:$(this).attr('ht'),width:$(this).attr('wt')},0).fadeIn(200);
				
			
				$(".arrow1").animate({opacity:1.0,left:left1,top:top-2},200,function(){   $(".arrow1").find(".details").html(detail); $(".arrow1").find(".details").fadeIn(5);});
			}
		
	});
	
	

});