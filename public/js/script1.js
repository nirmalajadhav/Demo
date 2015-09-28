$(document).ready(function(){

	/*Login Js*/
	$('.forgotpwdpage form input[type=submit]').on('click', function(e){
		e.preventDefault();
		$.ajax({
           type: "POST",
           url: $('.forgotpwdpage form').attr('action'),
           data: $(".forgotpwdpage form").serialize(), // serializes the form's elements.
           success: function(data)
           {
           		if(data.trim() == '1'){
           			window.location.href = 'http://www.cometchat.com';
           		}
           		else{
           			$('.fperrorblk').html(data);
           		}
           }
         });
	});
});