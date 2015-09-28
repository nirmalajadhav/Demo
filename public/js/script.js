(function(a){(jQuery.browser=jQuery.browser||{}).mobile=/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od|ad)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))})(navigator.userAgent||navigator.vendor||window.opera);
var cc_buy_total = {
	'edition':49,
	'addon':0,
	'installation':0,
	'cometservice':0,
	'tpc':0
}

var cc_buy_selected = 'card';
function renderPrice(){
	var sum = 0;	
	for(o in cc_buy_total){
		sum = sum+cc_buy_total[o];		
	}	
	return sum;	
}
function getRef(){
	var refCookie = $.cookie('ref');
	
	if (getUrlVars()['r'] != null){
		$.cookie('benefit', getUrlVars()['r'], { expires: 60, path: '/' });
	} else if (getUrlVars()['ref'] != null){
		$.cookie('benefit', getUrlVars()['ref'], { expires: 60, path: '/' });
	}
		
	var benCookie = $.cookie('benefit');
	
	if (refCookie == null) {
		if(getUrlVars()['r'] != null){
			$.cookie('ref', getUrlVars()['r'], { expires: 60, path: '/' });
		}else if(getUrlVars()['ref'] != null){
			$.cookie('ref', getUrlVars()['ref'], { expires: 60, path: '/' });
		}else{
			$.cookie('ref', 'cc', { expires: 60, path: '/' });
		}
		refCookie = $.cookie('ref');
	}
	
	
	if(benCookie == null){
		benCookie = '';
	} else {
		benCookie = '-' + benCookie;
	}	
	
	return refCookie + benCookie;
}


function urlGenerate(){
	var email=$('#cal_email').val();
	var str='email='+email+'&';
	products = [];
	var indTotal = $('#ind-total').text();
	
	var ref = getRef();

	var url = '/buy/redirect?device=desktop&type=creditcard&'+str+'ref='+ref+'&con=intl';
	var urlPp = '/buy/redirect?device=desktop&type=paypal&'+str+'ref='+ref+'&con=intl';	
	var urlIn = '/buy/redirect?device=desktop&type=creditcard&'+str+'ref='+ref+'&con=in&inr=';

	var pid = $('#buy-cc-edition').attr('data-pid');
	products.push(pid);

	var selectedProducts = $('div[data-selected="1"]');
	$.each(selectedProducts,function(index,product){
		pid = $(product).attr('data-pid');		
		products.push(pid);		
	});

	var ind = '';
	if(cc_buy_total.cometservice){
		if(typeof geoplugin_currencyConverter == 'function'){
            ind = Math.round(geoplugin_currencyConverter(total,false));
        } else {
        	$('#ind-total').css('display','none');  
        }
	}
	
	var pString2 = '&products='+products.join(',');

	
	if(cc_buy_selected == 'card'){
				$('.buynow-button a').attr('href',url+pString2);
			}else{
				$('.buynow-button a').attr('href',urlPp+pString2);
			}	
	$('.buy-india').attr('href',urlIn+indTotal);	
	
}



$(document).ready(function(){
	 $(window).bind('scroll', function() {
	   var navHeight = $( window ).height() - 50;
			 if ($(window).scrollTop() > navHeight) {
				 $('#theme-nav-bar').addClass('fix-search');
			 }
			 else {
				 $('#theme-nav-bar').removeClass('fix-search');
			 }
		});

//var query = window.location.search.substring(1);
	$(window).load(function() {
     	//alert("window load occurred!");
      	var plan_selected=window.location.search.substring(1);
   		//alert(plan_selected);
   		// window.location.href = '';
    	_pageurl=""+window.location;
    	// alert(_pageurl);
	    if (plan_selected && _pageurl.indexOf("buy") > -1) {
			$("#"+plan_selected).siblings('a[rel="cometcontent"]').click();
			var _href = $("#"+plan_selected).attr("href");
			$("#"+plan_selected).attr
			("href", _href + '&merchant_order_id=' + merchantorderid);
			$("#"+plan_selected).siblings('.visible-phone').attr("href", _href + '&merchant_order_id=' + merchantorderid);
	    }
	});
    


	$(".butn").click(function(){
		$(".butn").removeClass('change-color');
		 var butnid = $(this).attr('id');
    	$("#"+butnid).addClass('active-theme');
    	$("#"+butnid).addClass('change-color');
	});

	$("#prev").hide();

	function arrow_visibility(newactive){
		if(newactive=="classic"){
			$("#next").hide();
		}else{
			$("#next").show();
		}
		if(newactive=="facebook"){
			$("#prev").hide();
		}else{
			$("#prev").show();
		}
	}

	function removeStyle(){
		$(".docked_theme").addClass('hidden-theme');
		$(".docked_theme").removeClass('visible-theme');
		$(".options1").removeClass('active-theme');	
	}

	function addStyle(newactive){
		var theme_content=$("#"+newactive).attr('data-content-id');
		var theme_img=$("#"+newactive).attr('data-img-id');
		$("#"+theme_content).removeClass('hidden-theme');
		$("#"+theme_content).addClass('visible-theme');
		$("#"+theme_img).removeClass('hidden-theme');
		$("#"+theme_img).addClass('visible-theme');
	}

	$("#next").on('click',function(e) {
		e.preventDefault();
		var p = $('.active-theme').attr('id');
		removeStyle();
		$( "#"+p).next('.options1').addClass('active-theme');
		var newactive = $('.active-theme').attr('id');
		arrow_visibility(newactive);
		addStyle(newactive);
	});

	$("#prev").on('click',function(e) {
		e.preventDefault();
		var current = $('.active-theme').attr('id');
		removeStyle();
		$( "#"+current).prev('.options1').addClass('active-theme');
		var newactive = $('.active-theme').attr('id');
		arrow_visibility(newactive);
		addStyle(newactive);
	});

	$(".options1").on('click',function(e) {
		e.preventDefault();
		var themeid = $(this).attr('id');
		removeStyle();
		//var themeid = $(this).attr('id');
		addStyle(themeid);
		$(this).addClass('active-theme');
		arrow_visibility(themeid);
	});

	$(".platform-prize").on('click',function(e) {
		e.preventDefault();
		var platformid = $(this).attr('id');
		var platform = $(this).attr("data-attr-plat");
		if($(this).hasClass('active')){
			$(this).removeClass('active');
			$("#"+platform).addClass('hide_img');
			$("#"+platform+"-plus").addClass('hide_img');
			var take_initial_prize='-combo-edition';
			calculate_prize(platformid,take_initial_prize);
		}
		else{
			$(this).addClass('active');
			$("#web-plat").removeClass('hide_img');
			$("#"+platform).removeClass('hide_img');
			$("#"+platform+"-plus").removeClass('hide_img');
			if(!($("#combo-pack").hasClass('hide_img'))){
				var take_initial_prize='-combo-edition';
			}else{
				var take_initial_prize='-edition';
			}
			calculate_prize(platformid,take_initial_prize);
		}
	});

	function calculate_prize(platformid,take_initial_prize){
		var be_initial_prize=$('#be'+take_initial_prize).attr("data-attr-prize");
		var pro_initial_prize=$('#pro'+take_initial_prize).attr("data-attr-prize");
		var pre_initial_prize=$('#pre'+take_initial_prize).attr("data-attr-prize");
		var pe_initial_prize=$('#pe'+take_initial_prize).attr("data-attr-prize");
		var plat_prize=$("#"+platformid).attr("data-attr-prize");
		if(!($("#"+platformid).hasClass('active'))){
			var be_initial_prize=parseInt(be_initial_prize)-parseInt(plat_prize);
			var pro_initial_prize=parseInt(pro_initial_prize)-parseInt(plat_prize);
			var pre_initial_prize=parseInt(pre_initial_prize)-parseInt(plat_prize);
			var pe_initial_prize=parseInt(pe_initial_prize)-parseInt(plat_prize);
		}else{
			var be_initial_prize=parseInt(be_initial_prize)+parseInt(plat_prize);
			var pro_initial_prize=parseInt(pro_initial_prize)+parseInt(plat_prize);
			var pre_initial_prize=parseInt(pre_initial_prize)+parseInt(plat_prize);
			var pe_initial_prize=parseInt(pe_initial_prize)+parseInt(plat_prize);
		}
		$("#combo-pack").removeClass('hide_img');
		$('#be-combo-edition').html('<b>$'+be_initial_prize+'</b>');
		$('#be-combo-edition').attr('data-attr-prize', be_initial_prize);
		$('#pro-combo-edition').html('<b>$'+pro_initial_prize+'</b>');
		$('#pro-combo-edition').attr('data-attr-prize', pro_initial_prize);
		$('#pre-combo-edition').html('<b>$'+pre_initial_prize+'</b>');
		$('#pre-combo-edition').attr('data-attr-prize', pre_initial_prize);
		$('#pe-combo-edition').html('<b>$'+pe_initial_prize+'</b>');
		$('#pe-combo-edition').attr('data-attr-prize', pe_initial_prize);		
	}

	$(".close,.overlay").click(function () {
		$("#overlay-popup").fadeOut("slow");
	});
		$(".tap-pop-up").click(function (e) {
		e.stopPropagation();
	});

	$('.tap-button a').on('click',function(e) {
		e.preventDefault();

		if($('#tap-name').val().length == 0 ){
			$('#tap-name').effect( "shake" ).css({'box-shadow':'1px 1px 3px rgb(243, 117, 117)','border-color':'rgb(243, 117, 117)'});
			return false;
		}
		if($('#tap-email').val().length == 0 || !validateEmail($('#tap-email').val())){
			$('#tap-email').effect( "shake" ).css({'box-shadow':'1px 1px 3px rgb(243, 117, 117)','border-color':'rgb(243, 117, 117)'});
			return false;
		}

		$.ajax({
			type: "POST",
			url: "//my.cometchat.com/tapatalk/signup",
			data: {
				email: $('#tap-email').val(), 
				name: $('#tap-name').val(),
				domain: $('#tap-domain').val(),
				ref: getRef()
			},
			dataType: 'jsonp',
			success: function (response) {
				 $("#overlay-popup").fadeIn("slow");
			}
		});
	});
$('.buynow-button a').on('click',function(e){
		if($('#cal_email').val().length == 0 || !validateEmail($('#cal_email').val())){
			e.preventDefault();
			$('#error-msg-row').css('display','block');
			$('.error-msg').html('Please enter a valid Email ID').css('color', 'red');
 				$('#cal_email').effect( "shake" ).css({'box-shadow':'0px 0px 2px rgb(243, 117, 117)','border-color':'rgb(243, 117, 117)'});
		}

	});
$('#cal_email').blur(function(){
	urlGenerate();
});

$('.check').removeAttr('checked');
	if(typeof geoplugin_countryCode == 'function'){
		var cc_country = geoplugin_countryCode();		
		if(cc_country == 'IN'){
			$('.india_link').css('display','block');
		}else{
			$('.india_link').css('display','none');
		}
	}else{
		$('.india_link').css('display','none');
	}	
	
		//Pricing Calculator
	$(".edition_buy").click(function(){
		
		var button = $(this);		
		var price = $(button).data('price');
		var type = $(button).data('type');

		cc_buy_total.edition = parseInt(price);
        $(".price_button").text("BUY NOW");        
        $(button).text('SELECTED');        
        $('#plan_edition').text(type);

        $('.cal_edition_text').text(type+' Edition');
        $('.cal_edition_price').text(price);

        switch(type){
        	case "Basic":
					$('#buy-cc-edition').attr('data-pid','CCBASIC');
				break;
			case "Professional":
					$('#buy-cc-edition').attr('data-pid','CCPRO');
				break;
			case "Premium":
					$('#buy-cc-edition').attr('data-pid','CCPRE');
				break;
			case "Platinum":
					$('#buy-cc-edition').attr('data-pid','CCPLA');
				break;
			default:
				return;
        }

        if(price > 129){
        	$('.install-cb').css('display','none');
        	$('.install-hidden').css('display','block');
        	$('.cal_installation').css('display','none');
        	cc_buy_total.installation = 0;
        	$('#buy-cc-installation').attr('data-selected','0');  
        }else {
        	$('.install-cb').css('display','block');
        	$('.install-hidden').css('display','none');
        	
        	if($('.cb-installation').is(':checked')){
        		cc_buy_total.installation = 79;
        		$('.cal_installation').css('display','block');
        	}
        }
        
        $('.all_price_sect').slideDown('slow',function(){
			$('#new_cal').hcSticky();
			$('html, body').animate({
		    scrollTop: $("#scro").offset().top
		}, 1000);
		});

        var total = renderPrice();
        var ind = '';
        if(typeof geoplugin_currencyConverter == 'function'){
            ind = Math.round(geoplugin_currencyConverter(total,false));
        } else {
        	$('#ind-total').css('display','none');  
        }       
        $('#total').text(total);
        $('#ind-total').text(ind);        
        urlGenerate();
    });	
  	
	//Installation
	$('.cb-installation').change(
    function(){    	
        if ($(this).is(':checked') && (cc_buy_total.edition == 49 || cc_buy_total.edition == 129 )) {
            cc_buy_total.installation = 79;
            $('.cal_install_price').text('79');
            $('#buy-cc-installation').css('display','block');
            $('#buy-cc-installation').attr('data-selected','1');            
        }else{
        	cc_buy_total.installation = 0;
        	$('.cal_install_price').text('0'); 
        	$('#buy-cc-installation').css('display','none');      	
        	$('#buy-cc-installation').attr('data-selected','0');  
        }
        var total = renderPrice();

        var ind = '';
        if(typeof geoplugin_currencyConverter == 'function'){
           ind = Math.round(geoplugin_currencyConverter(total,false));
        } else {
        	$('#ind-total').css('display','none');  
        }   
        
        $('#total').text(total);
        $('#ind-total').text(ind);
       
        urlGenerate();
    });

    	//Add On
	$('.cb-addon').change(
    function(){
    	var c = $(this).data('addon');
    	var cl = '.'+c;
    	var selected = '0';

        if ($(this).is(':checked')) {
            cc_buy_total.addon += parseInt($(this).val());
            $(cl).css('display','block');
            selected = '1';
        }else{
        	cc_buy_total.addon -= parseInt($(this).val());
        	$(cl).css('display','none');
        	
        }
        var total = renderPrice();
        
        var ind = '';
        if(typeof geoplugin_currencyConverter == 'function'){
             ind = Math.round(geoplugin_currencyConverter(total,false));
        } else {
        	$('#ind-total').css('display','none');  
        }    
        $('#total').text(total);
        $('#ind-total').text(ind);

              
        switch(c){
        	case 'cal_addon_mobile':
					$('#buy-cc-mobile').attr('data-selected',selected);
				break;
			case 'cal_addon_mobilesdk':
					$('#buy-cc-sdk').attr('data-selected',selected);
				break;
			case 'cal_addon_dm':
					$('#buy-cc-dm').attr('data-selected',selected);
				break;		
			default:			
				return;
        }
        urlGenerate();
    });

    //CometService
    $('#cb-cometservice').change(
    function(){
        if ($(this).is(':checked')) {
        	cc_buy_total.cometservice = 9;
        	$("#cometservice").slideDown("slow");
        	$('.cal_cs_price').text('9');
        	$('.cal_cometservice').css('display','block');
        	$('.cc_opt-hidden').slideDown();
        	
        	$('.cb-tpc').prop('checked',false);
        	cc_buy_total.tpc = 0;
        	$('.cal_tpc').css('display','none');
        	$(".cc_third_hidden").slideUp("slow");
        	$('#buy-cc-cs').attr('data-selected','1');

        }else{
        	$("#cometservice").slideUp("slow");
        	cc_buy_total.cometservice = 0;
        	$('.cal_cometservice').css('display','none');
        	$('.cc_opt-hidden').slideUp();
        	$(".radio-cs:first").prop('checked',true);
        	$('#buy-cc-cs').attr('data-selected','0');        	
        }
        var total = renderPrice();

        var ind = '';
        if(typeof geoplugin_currencyConverter == 'function'){
            ind = Math.round(geoplugin_currencyConverter(total,false));
        } else {
        	$('#ind-total').css('display','none');  
        }
        $('#total').text(total);
        $('#ind-total').text(ind);
        urlGenerate();
    });

    $('#buy-cc-installation').css('display','none');

    $('.radio-cs').change(
    function(){
        if ($(this).is(':checked')) {
        	var price = parseInt($(this).val());
            cc_buy_total.cometservice = price;
            $('.cal_cs_price').text(price);

            switch(price){
            	case 9:
					$('#buy-cc-cs').attr('data-pid','CS9');	
					break;
				case 19:
					$('#buy-cc-cs').attr('data-pid','CS19');	
					break;
				case 49:
					$('#buy-cc-cs').attr('data-pid','CS49');	
					break;
				case 99:
					$('#buy-cc-cs').attr('data-pid','CS99');	
					break;            	
            }
        }
        var total = renderPrice();
        var ind = '';
        if(typeof geoplugin_currencyConverter == 'function'){
            ind = Math.round(geoplugin_currencyConverter(total,false));
        } else {
        	$('#ind-total').css('display','none');  
        }
        $('#total').text(total);
        $('#ind-total').text(ind);
        urlGenerate();
    });
   
	
	$('.cc_buy_card').click(function(){
		$('.cc_buy_card h5').removeClass('cc_buy_selected');
		$('.cc_tick').css("display","none");
		var but = $(this);		
		cc_buy_selected = but.data('type');		
		but.find('h5').addClass('cc_buy_selected');
		but.find('.cc_tick').css("display","block");
		urlGenerate();
	});
/*pricing calculatr end*/
		/*purchase page tooltip plugin*/
	if($('#purchase_page').length > 0 || $('#purchase').length > 0 ){  
		$('.hastip').tooltipsy();
	}
	if($('#purchase-now_page').length > 0 || $('#purchase-now').length > 0 ){  
		$('.hastip').tooltipsy();
	}
	if($('#pluginspage').length > 0){  
		$('.hastip').tooltipsy({
   		 offset: [0, 15],
   		 className: 'mytooltipsy',
   		});
	}
	
	/*code box starts here*/
	$('.oto1').click(function(){
		$('.oto1-div').children('li').removeClass('active');
		$('.oto1-code').children('div').addClass('hide');
		$(this).parent('li').addClass('active');
		$('.'+$(this).attr('href').substr(1)+"-oto1").removeClass('hide');
	});

	$('.grp1').click(function(){
		$('.grp1-div').children('li').removeClass('active');
		$('.grp1-code').children('div').addClass('hide');
		$(this).parent('li').addClass('active');
		$('.'+$(this).attr('href').substr(1)+"-grp1").removeClass('hide');
	});

		$('.oto2').click(function(){
		$('.oto2-div').children('li').removeClass('active');
		$('.oto2-code').children('div').addClass('hide');
		$(this).parent('li').addClass('active');
		$('.'+$(this).attr('href').substr(1)+"-oto2").removeClass('hide');
	});

	$('.grp2').click(function(){
		$('.grp2-div').children('li').removeClass('active');
		$('.grp2-code').children('div').addClass('hide');
		$(this).parent('li').addClass('active');
		$('.'+$(this).attr('href').substr(1)+"-grp2").removeClass('hide');
	});

		$('.oto3').click(function(){
		$('.oto3-div').children('li').removeClass('active');
		$('.oto3-code').children('div').addClass('hide');
		$(this).parent('li').addClass('active');
		$('.'+$(this).attr('href').substr(1)+"-oto3").removeClass('hide');
	});

	$('.grp3').click(function(){
		$('.grp3-div').children('li').removeClass('active');
		$('.grp3-code').children('div').addClass('hide');
		$(this).parent('li').addClass('active');
		$('.'+$(this).attr('href').substr(1)+"-grp3").removeClass('hide');
	});

	$('.oto4').click(function(){
		$('.oto4-div').children('li').removeClass('active');
		$('.oto4-code').children('div').addClass('hide');
		$(this).parent('li').addClass('active');
		$('.'+$(this).attr('href').substr(1)+"-oto4").removeClass('hide');
	});

	$('.grp4').click(function(){
		$('.grp4-div').children('li').removeClass('active');
		$('.grp4-code').children('div').addClass('hide');
		$(this).parent('li').addClass('active');
		$('.'+$(this).attr('href').substr(1)+"-grp4").removeClass('hide');
	});

		$('.oto5').click(function(){
		$('.oto5-div').children('li').removeClass('active');
		$('.oto5-code').children('div').addClass('hide');
		$(this).parent('li').addClass('active');
		$('.'+$(this).attr('href').substr(1)+"-oto5").removeClass('hide');
	});

	$('.grp5').click(function(){
		$('.grp5-div').children('li').removeClass('active');
		$('.grp5-code').children('div').addClass('hide');
		$(this).parent('li').addClass('active');
		$('.'+$(this).attr('href').substr(1)+"-grp5").removeClass('hide');
	});
	/*code box ends here*/


	/*Cometchat Videos Popup js*/	
	if(jQuery.browser.mobile && $(document).width() < 481){}else{		
		$("a[rel^='cometvideos']").prettyPhoto({
			opacity: 0.85,
			show_title: false,
			allow_resize: true,
			default_width: 853,
			default_height: 480,
			horizontal_padding: 10,
			autoplay: true,
			deeplinking: false,
			changepicturecallback: function(){
			
				var dwidth = $(document).width();
				if(dwidth < 481){
					var newheight = (480 / 853) * dwidth;
					$('.pp_content_vid .pp_content iframe').css({
						width: dwidth+'px',
						height: newheight+'px',
					});
					$('.pp_content_vid .pp_pic_holder').css({
						'margin-top': -(newheight/2)+'px'
					});
				}
			},
			ie6_fallback: true,
			markup: '<div class="pp_content_vid"><div class="pp_pic_holder"> \
						<div class="ppt">&nbsp;</div> \
						<div class="pp_content_container"> \
							<div class="pp_left"> \
							<div class="pp_right"> \
								<div class="pp_content"> \
									<div class="pp_loaderIcon"></div> \
									<div class="pp_fade"> \
										<div class="pp_details"> \
											<a class="pp_close" href="#" style="display:none;">Close</a> \
										</div> \
										<div class="pp_hoverContainer"> \
											<a class="pp_next" href="#">next</a> \
											<a class="pp_previous" href="#">previous</a> \
										</div> \
										<div id="pp_full_res"></div> \
									</div> \
								</div> \
							</div> \
							</div> \
						</div> \
					</div></div> \
					<div class="pp_overlay"></div>',
			social_tools: false
		});
	}

 $('.carousel').carousel({
    interval: 8000
}) 
	
	/*Cometchat Inline Popup js*/
	
	var ppinlinewidth = $(document).width() - 60;
	if(ppinlinewidth > 600){
		ppinlinewidth = 600;
	}
	
	$("a[rel^='subscribecontent']").prettyPhoto({
		opacity: 0.85,
		show_title: false,
		allow_resize: true,
		default_width: ppinlinewidth,
		deeplinking: false,
		ie6_fallback: true,
		markup: '<div class="pp_pic_holder"> \
					<div class="ppt">&nbsp;</div> \
					<div class="pp_content_container"> \
						<div class="pp_left"> \
						<div class="pp_right"> \
							<div class="pp_content"> \
								<div class="pp_loaderIcon"></div> \
								<div class="pp_fade"> \
									<div class="pp_details"> \
										<a class="pp_close" href="#" style="display:none;">Close</a> \
									</div> \
									<div class="pp_hoverContainer"> \
										<a class="pp_next" href="#">next</a> \
										<a class="pp_previous" href="#">previous</a> \
									</div> \
									<div id="pp_full_res"></div> \
								</div> \
							</div> \
						</div> \
						</div> \
					</div> \
				</div> \
				<div class="pp_overlay"></div>',
		social_tools: false
	});
	
	$("a[rel^='subscribecontent1']").prettyPhoto({
		opacity: 0.85,
		show_title: false,
		allow_resize: true,
		default_width: ppinlinewidth,
		deeplinking: false,
		ie6_fallback: true,
		markup: '<div class="pp_pic_holder"> \
					<div class="ppt">&nbsp;</div> \
					<div class="pp_content_container"> \
						<div class="pp_left"> \
						<div class="pp_right"> \
							<div class="pp_content"> \
								<div class="pp_loaderIcon"></div> \
								<div class="pp_fade"> \
									<div class="pp_details"> \
										<a class="pp_close" href="#" style="display:none;">Close</a> \
									</div> \
									<div class="pp_hoverContainer"> \
										<a class="pp_next" href="#">next</a> \
										<a class="pp_previous" href="#">previous</a> \
									</div> \
									<div id="pp_full_res"></div> \
								</div> \
							</div> \
						</div> \
						</div> \
					</div> \
				</div> \
				<div class="pp_overlay"></div>',
		social_tools: false
	});
	
	$("a[rel^='cometcontent']").prettyPhoto({
		opacity: 0.85,
		show_title: false,
		allow_resize: true,
		default_width: ppinlinewidth,
		deeplinking: false,
		changepicturecallback: function(){
			if($('#purchase').length > 0){
				total = parseInt($('.pp_pic_holder .mamnt').text());
			}
		},
		ie6_fallback: true,
		markup: '<div class="pp_pic_holder"> \
					<div class="ppt">&nbsp;</div> \
					<div class="pp_content_container"> \
						<div class="pp_left"> \
						<div class="pp_right"> \
							<div class="pp_content"> \
								<div class="pp_loaderIcon"></div> \
								<div class="pp_fade"> \
									<div class="pp_details"> \
										<a class="pp_close" href="#" style="display:none;">Close</a> \
									</div> \
									<div class="pp_hoverContainer"> \
										<a class="pp_next" href="#">next</a> \
										<a class="pp_previous" href="#">previous</a> \
									</div> \
									<div id="pp_full_res"></div> \
								</div> \
							</div> \
						</div> \
						</div> \
					</div> \
				</div> \
				<div class="pp_overlay"></div>',
		social_tools: false
	});
	
	/*Cometchat Image Popup js*/
	 $("a[rel^='cometslider[cc_gal]']").prettyPhoto({
	 	animation_speed: 'fast',
		slideshow: 5000,
		autoplay_slideshow: true,
		opacity: 0.85,
		show_title: false,
		allow_resize: true,
		default_width: 500,
		default_height: 344,
		horizontal_padding: 20, 
		deeplinking: false,
		overlay_gallery: false,
		keyboard_shortcuts: true,
		ie6_fallback: true,
		markup: '<div class="pp_pic_holder"> \
					<div class="ppt">&nbsp;</div> \
					<div class="pp_content_container"> \
						<div class="pp_left"> \
						<div class="pp_right"> \
							<div class="pp_content"> \
								<div class="pp_loaderIcon"></div> \
								<div class="pp_fade"> \
									<div class="pp_details"> \
										<a class="pp_close" href="#">Close</a> \
									</div> \
									<div class="pp_hoverContainer"> \
										<a class="pp_next" href="#">next</a> \
										<a class="pp_previous" href="#">previous</a> \
									</div> \
									<div id="pp_full_res"></div> \
								</div> \
							</div> \
						</div> \
						</div> \
					</div> \
				</div> \
				<div class="pp_overlay"></div>',
		gallery_markup: false,
		social_tools: false
	 });
	
	/*Home Page Typer*/
	$('[data-typer-targets]').typer();
	
	/*Desktop Messenger Slider*/
	$('#slides').slidesjs({
		width: 829,
		height: 516,
		navigation: {
			active: true,
			effect: "fade"
		},
		pagination: {
			active: true,
			effect: "fade"
		},
		effect: {
			fade: {
				speed: 400
			}
		},
		play: {
			active: true,
			effect: "fade",
			interval: 5000,
			auto: true,
			swap: true,
			pauseOnHover: true,
			restartDelay: 2500
		},
		callback: {
			start: function(number) {
				animateslide();
		      }
		}
	});
	
	$('.slidesjs-navigation, .slidesjs-pagination-item').on("click", function(event){
	  	animateslide();
	});
	
	/*Plugins Page*/
	if($('#pluginspage').length > 0){
            
            var pluginsurl = window.location.pathname;
            var pluginurlpart = pluginsurl.split('/');
            var plast = pluginurlpart[pluginurlpart.length - 1];
            var pclk = '';
            if(plast != 'plugins' && plast != ''){
                if(plast == 'audio-video-chat'){ pclk = '1'; }
                else if(plast == 'real-time-translation'){ pclk = '2'; }
                else if(plast == 'gtalk-chat'){ pclk = '3'; }
                else if(plast == 'games'){ pclk = '4'; }
                else if(plast == 'announcements'){ pclk = '5'; }
                else if(plast == 'themes'){ pclk = '6'; }
                else if(plast == 'facebook-chat-theme'){ pclk = '6'; }
                else if(plast == 'screensharing'){ pclk = '7'; }
                else if(plast == 'social-networking'){ pclk = '8'; }
                else if(plast == 'collaborate'){ pclk = '9'; }
                else if(plast == 'file-sharing'){ pclk = '10'; }
                else if(plast == 'manage-conversations'){ pclk = '11'; }
                else if(plast == 'transliterate'){ pclk = '12'; }
                else if(plast == 'custom-ads'){ pclk = '13'; }
                else if(plast == 'guest-chat'){ pclk = '14'; }
                else if(plast == 'broadcast-video'){ pclk = '15'; }
                else{
                	History.pushState(null, 'Plugins | Cometchat', ' ');
                	pclk = '1';
            	}
                $(".feature_nav li").removeClass("active");
                $("#nav"+pclk).addClass("active");
                $(".feat_desc").hide();
                $("#feat"+pclk).show();
            }
            
            if(!jQuery.browser.mobile){
	            $(".pop_feat_list").hcSticky({
	                    top: 60,
	                    bottomEnd: $(document).height() - $('#prefooter').offset().top - parseInt($('.pop_feat_list').css('margin-bottom')) + 30,
	                    noContainer: true
	            });
	
	            $("#plugins_blue_band").hcSticky({
	                    top: 0,
	                    bottomEnd: $(document).height() - $('#prefooter').offset().top - parseInt($('.feat_band').css('margin-bottom')) + 630,
	                    noContainer: true
	            });
            }
            
            var pbboff = $('#plugins_blue_band').offset().top;
			
			$(".feature_nav li").on("click", function(e){
				e.preventDefault();
				var id = $(this).attr("id");
				var pluginname = $(this).find('a').text();
				var pluginnameurl = pluginname.toLowerCase().replace("/", "-").replace(" ", "-").replace(" ", "-");
				History.pushState(null, pluginname+' | Cometchat', pluginnameurl);
				$(".feature_nav li").removeClass("active");
				$(this).addClass("active");
				
				$('body,html').animate({
					scrollTop: pbboff
				}, 500, function(){
					var fnum = id.replace('nav','');
					$(".feat_desc").hide();
					$("#feat"+fnum).show();
				});
				
				
			});
	}	
	
	/*Contact Page*/
	$('#condition .click').click(function(){
		var img_src=$(this).parent().find('#subscribe_box').attr('src');
		$(this).parent().find('#subscribe_box').attr('src','public/img/checked.png').addClass('checked');
	   	if(img_src=='public/img/empty.png'){
	   		
	    }    
	   	else{
	   		$(this).parent().find('#subscribe_box').attr('src','public/img/empty.png').removeClass('checked');
	   	}
   });
   
   $('a.obfemail').nospam({
	    replaceText: true
	});
  
   $(document).on('click', '#cfsubmit', function(e) {
     	e.preventDefault();
     	var querytype = $('#cfqtypefield').val();
     	var subj = $('#cfsubjectfield').val();
     	var emailid = $('#cfemailfield').val();
     	var message = $('#cfmsgfield').val();
     	if(querytype == 'none')
     		$('#cferror').html('Please choose a topic').css('color', 'red');
 		else if(emailid == '' || !validateEmail(emailid))
 			{
 				$('#cferrormail').html('Please enter a valid Email ID').css('color', 'red');
 				$('#cfemailfield').effect( "shake" ).css({'box-shadow':'0px 0px 2px rgb(243, 117, 117)','border-color':'rgb(243, 117, 117)'});
 			}
     	else if(subj == '')
     		{
     			$('#cferrorsub').html('Please enter a subject').css('color', 'red');
     			$('#cfsubjectfield').effect( "shake" ).css({'box-shadow':'0px 0px 2px rgb(243, 117, 117)','border-color':'rgb(243, 117, 117)'});
     		}
		else if(message == '')
 			{
 				$('#cferrormes').html('Please enter a message').css('color', 'red');
 				$('#cfmsgfield').effect( "shake" ).css({'box-shadow':'0px 0px 2px rgb(243, 117, 117)','border-color':'rgb(243, 117, 117)'});
 			}
		else{
	     	$.ajax({
				url: $('#form_head').attr('data-url'),
				type: 'POST',
				data: {
					type: querytype,
					subject: subj,
					email: emailid,
					msg: message,
				},
				success: function(data){
					$('a[rel="subscribecontent1"]').trigger('click');
					$('#cfemailfield').val('');
					$('#cfsubjectfield').val('');
			     	$('#cfmsgfield').val('');
				},
				error: function() {
					$('#cferror').html('Sorry, an error occurred.').css('color', 'red');
				}
			});
		}
   });
   
   /*Compare Edition Page*/
	$( "#accordion" ).accordion({
	  heightStyle: "content"
	});
	
	if($('#worldmap').length > 0){
		homeslider();
	}
	
	/*FAQ Page*/
	$('.questions h4 a').on('click', function(e){
		e.preventDefault();
		$(this).parent().next().slideToggle('slow');
	});
	
	$('.faqmenus .options a').on('click', function(e){
		e.preventDefault();
		var toblock = $(this).attr('href');
		$('body,html').animate({
			scrollTop: $(toblock+"_faq").offset().top
		}, 600);
	});
	$('#scro h4 a').on('click', function(){
		var asds = $("body").offset().top;
			$('html, body').animate({
			scrollTop: asds
		}, 800);
	});
	
	
	/* Demo page */
	
	$('#select_cms').on('change', function(e){
		if($("select option:selected").val() == "default"){
			alert("Select a base software");
			e.preventDefault();
		}
		else{
			var link = $("select option:selected").attr('link');
			$(".viewdemo").attr('href',link);
		}
		
	});
	$('.viewdemo').on('click', function(e){
		if($("select option:selected").val() == "default"){
			alert("Select a base software");
			e.preventDefault();
		}
	});

	/*Compare edition page*/
	/*$(document).on('click', '.button_buy', function(e){
		e.preventDefault();
		var _pageurl=$(this).attr("href");
		window.location.replace(_pageurl);
		var plan_selected=$(this).attr("data-plan-id");
		$("#"+plan_selected).attr("href","#basic");
		$("#"+plan_selected).attr("rel","cometcontent");
		alert(plan_selected);
		$('#'+plan_selected).siblings('a[rel="cometcontent"]').click();
		
		
	});*/
	
	/*Buy Page JS*/
	$(document).on('click', '#buybasoptions, #buyprooptions, #buypreoptions, #buyplaoptions, #buymoboptions, #buymesoptions', function(e){
		e.preventDefault();
		$(this).siblings('a[rel="cometcontent"]').click();
	});
	
	/*Payment Modes JS*/
	$(document).on('click', '#basic_add .imgcont img, #prof_add .imgcont img, #premium_add .imgcont img, #pla_add .imgcont img, #dm_add .imgcont img, #mob_add .imgcont img', function(e){
		e.preventDefault();
		$(this).parent().siblings('.optionsRadios').click();
	});
	
	$(document).on('click', '.pp_pic_holder .proceed', function(e){
		e.preventDefault();
		
		var payopt = $('.pp_pic_holder input:radio[name=optionsRadios]:checked').val();
		if(payopt == 'option1')
		{
				
			var prodid = $('.pp_pic_holder input:radio[name=optionsRadios]:checked').attr('data-prodid');

			var coupcode = '';
			
			if (typeof $('#purchase .purchase_head').attr('data-couponcode') !== 'undefined') {
				coupcode = $('#purchase .purchase_head').attr('data-couponcode');
			}

			var url = 'https://www.2checkout.com/checkout/purchase?sid=138239&quantity=1&product_id=' + prodid + '&skip_landing=1&currency_code=USD&coupon='+coupcode+'&merchant_order_id=' + merchantorderid;
			window.open(url,"_self");
			
		}
		else if(payopt == 'option2'){
			var prodqs = $('.pp_pic_holder input:radio[name=optionsRadios]:checked').attr('data-prodqs');
			var url = 'https://sites.fastspring.com/cometchat/instant/' + prodqs;
			window.open(url,"_self");
		}else if(payopt == 'option3'){
			var prodname = $('.pp_pic_holder input:radio[name=optionsRadios]:checked').attr('data-prodn');
			var prodid = $('.pp_pic_holder input:radio[name=optionsRadios]:checked').attr('data-prodid');
			$('#buyamount').val($(this).attr('data-amt'));
			$('#buyname').val(prodname);
			$('#buyitem').val(prodid);
			$('#buycustom').val(merchantorderid);
			$('#paypalform').submit();
		}
	});
	
	/*ccavenue payment option*/
	$(document).on('click', '.indiapage .button .buyfromindiabtn', function(e){
		e.preventDefault();
		
		var prodid = $('.pp_pic_holder input:radio[name=optionsRadios]:checked').attr('data-prodid');
		var prodname = $('.pp_pic_holder input:radio[name=optionsRadios]:checked').attr('data-prodn');
		$('#order-id').val(e.timeStamp + Math.floor((Math.random() * 999)));
		
		if(geoplugin_currencyConverter(1,false)<55)
		{
			var indian_amt = (Math.round((55*$(this).attr('data-amt'))/100)*100)-1;
		}
		else
		{
			var indian_amt = (Math.round(geoplugin_currencyConverter($(this).attr('data-amt'), false)/100)*100)-1;
		}
		$('#buy-amnt').val(indian_amt);
		$('#merchant_param').val(merchantorderid);
		$('#ccavenue-form').submit();
			
	});	
	/*Buy page for India*/
	if(document.URL.indexOf("/buy/in") != -1){
	if(geoplugin_currencyConverter(1,false)<55)
	{
		var basic_indian_amt = (Math.round((55*49/100)*100))-1;
		var professional_indian_amt = (Math.round((55*129/100)*100))-1;
		var premium_indian_amt = (Math.round((55*249/100)*100))-1;
		var platinum_indian_amt = (Math.round((55*499/100)*100))-1;
	}
	else
	{
		var basic_indian_amt = (Math.round(geoplugin_currencyConverter(49, false)/100)*100)-1;
		var professional_indian_amt = (Math.round(geoplugin_currencyConverter(129, false)/100)*100)-1;
		var premium_indian_amt = (Math.round(geoplugin_currencyConverter(249, false)/100)*100)-1;
		var platinum_indian_amt = (Math.round(geoplugin_currencyConverter(499, false)/100)*100)-1;
	}
	$("#basic-value").html("र "+basic_indian_amt);
	$("#professional-value").html("र "+professional_indian_amt);
	$("#premium-value").html("र "+premium_indian_amt);
	$("#platinum-value").html("र "+platinum_indian_amt);
	}
	/*loading icon*/
	$(document).on('click','.proccedbtn a', function()
	{
		$('.pp_fade .content').css("display","none");
		$('.pp_fade .head_basic').css("display","none");
		$('#pp_full_res .loading-image').css("opacity","1");
	});
	
	/*Demo Page JS*/
	$(document).on('change', '.appselect', function(){
		var num = $(this).val();
		if(jQuery.browser.mobile && num == 2){
			num = 3;
		}
		$('.appselectbtn a').attr('href','#inline-'+num);
	});
	
	/* cometservice message calculator */
    $(document).on('keyup', '#anv, #ant, #anm', function() {
		calculate();
	});
	
	/*Reference Cookie*/
	var merchantorderid = '';
	
	
	merchantorderid = getRef();
	
	if($('.upgradepage').length > 0){
		merchantorderid = $('.upgradepage').attr('data-token');
	}
	
	$("#buybasoptions, #buyprooptions, #buypreoptions, #buyplaoptions, #buymoboptions, #buymesoptions").each(function() {
		var _href = $(this).attr("href");
		$(this).attr("href", _href + '&merchant_order_id=' + merchantorderid);
		$(this).siblings('.visible-phone').attr("href", _href + '&merchant_order_id=' + merchantorderid);
		
	});
	
	/*Newsletter Subscribe JS*/
	$('form.mc-embedded-subscribe-form').on('submit', function(e){
		e.preventDefault();
		var $this = $(this);
		$.ajax({
			url: $(this).attr('action'),
			type: 'POST',
			data: $(this).serialize(),
			success: function(response){
				var data = JSON.parse(response);
				if(data['status'] == 'error'){
					$this.find('#mce-success-response').html(data['error']).fadeIn().delay(3000).fadeOut();
				}else{
					/*prettyphoto popup for success*/				
					$('a[rel="subscribecontent"]').trigger('click');
					/*$this.find('#mce-success-response').html('Successfully subscribed to CometChat').fadeIn().delay(3000).fadeOut();*/
					$('form.mc-embedded-subscribe-form .email').animate({color: "#9e9e9e"}, 500).fadeIn(function(){
						$('form.mc-embedded-subscribe-form .email').delay(500).val('');
					});					
				}
			},
			error: function() {
				$this.find('#mce-error-response').html('Failed!').fadeIn().delay(3000).fadeOut();
			}
		});
		
	});
	
	if(typeof(couponused) == 'undefined'){
		$('#purchase .coupon a').trigger( "click" );		
	} else {
		if(couponused == false){
			$('#purchase .coupon a').trigger( "click" );
		}		
	}
});

/*Email Check*/
function validateEmail(emailid) {
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  if( !emailReg.test(emailid) ) {
    return false;
  } else {
    return true;
  }
}

/*URL Check*/
function getUrlVars()
{
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
}

/*Comodo and Norton Popup*/
function comodocheck() {
	var trusturl='http://www.trustlogo.com/';
	if(window.location.protocol.toLowerCase()== 'https:' ){ trusturl = 'https://secure.comodo.com/'; }
	
	var url = window.location.protocol+"//" + window.location.host + escape(window.location.pathname);
	
	var comodo_window = window.open (trusturl+'ttb_searcher/trustlogo?v_querytype=W&v_shortname=SC5&v_search='+url+'&x=6&y=5', 'comodo',"status=0,toolbar=0,menubar=0,directories=0,resizable=0,location=0,status=0,scrollbars=0, width=385,height=655");
	if (comodo_window) {
	return false;
	} else {
	return true;
	}
}

/*Desktop Messenger Page Slider*/
function animateslide(){
	$('.bubble').hide().delay(500).fadeIn();
}

/*Home page - user comments slider*/
function homeslider(){

	 var hsnum = 4;
	 var hsnum2;
	
	 setInterval(function(){

		$("#cbox"+hsnum).fadeIn();
		
		if(hsnum<4)
		{
			hsnum2 = 12 - (3 - hsnum);			
		}
		else
		{
			hsnum2 = hsnum - 3;
		}
		
		$('#cbox'+hsnum2).fadeOut();
		
		hsnum++;
		
		if(hsnum == 13)
		{
			hsnum=1;
		}
		
	}, 3500);
}

/* cometservice message calculator */
function calculate() {
	var ant = $('.pp_content #ant').val();
	var anv = $('.pp_content #anv').val();
	var anm = $('.pp_content #anm').val();
	var messages = parseInt((((60/ant)*24)*anv)*(anm*30));
	if (isNaN(messages) || messages <= 0) {
		messages = '-';
	} else {
		messages = addCommas(messages);
	}
	$('.pp_content #calculate').html(messages);
}

function addCommas(nStr) {
	nStr += '';
	x = nStr.split('.');
	x1 = x[0];
	x2 = x.length > 1 ? '.' + x[1] : '';
	var rgx = /(\d+)(\d{3})/;
	while (rgx.test(x1)) {
		x1 = x1.replace(rgx, '$1' + ',' + '$2');
	}
	return x1 + x2;
}
