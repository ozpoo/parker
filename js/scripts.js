(function ($, root, undefined) {

	$(function () {

		'use strict';

		$(document).ready(function(){
			document.addEventListener("touchstart", function(){}, true);

			$(".slide[data-slide='0']").addClass("current");

			$(document).on('click', '.navigate-left', function(){
				var current = $(".slide.current").data("slide");
				var next = current;
				if(current - 1 < 0){
					next = $(".slide").size() - 1;
				}else{
					next = current - 1;
				}
				console.log(current);
				console.log(next);
				$(".slide").eq(current).removeClass("top");
				$(".slide").eq(next).addClass("top").addClass("current");
				setTimeout(function(current){
					$(".slide").eq(current).removeClass("current");
				}, 0, current);
			});

			$(document).on('click', '.navigate-right', function(){
				var current = $(".slide.current").data("slide");
				var next = current;
				if(current + 1 >= $(".slide").size()){
					next = 0;
				}else{
					next = current + 1;
				}
				console.log(current);
				console.log(next);
				$(".slide").eq(current).removeClass("top");
				$(".slide").eq(next).addClass("top").addClass("current");
				setTimeout(function(current){
					$(".slide").eq(current).removeClass("current");
				}, 0, current);
			});
		});

		$(window).load(function(){
			if($(".intro")){
				setTimeout(function(){
					$("main").addClass("show");
				},400);
				setTimeout(function(){
					$(".intro").addClass("hide");
				},1800);
			}else{
				$("main").addClass("show");
			}
			$(".low_res").each(function(){
				var $image = $(this);
				var $downloadingImage = $("<img>");
				$downloadingImage.load(function(){
				  $($image).attr("src", $(this).attr("src"));
				});
				$downloadingImage.attr("src", $($image).data("high"));
			});
		});

			// $('.slides-navigation div.navigate-left').mouseout(function(){
      //  	$('#mycursor').hide();
			// 	$('#mycursor .left').hide();
      //  	return false;
    	// });
    	// $('.slides-navigation div.navigate-left').mouseenter(function(){
      //  	$('#mycursor').show();
			// 	$('#mycursor .left').show();
      //  	return false;
    	// });
    	// $('.slides-navigation div.navigate-left').mousemove(function(e){
      //  	$('#mycursor').css('left', e.clientX).css('top', e.clientY);
    	// });
			//
			// $('.slides-navigation div.navigate-right').mouseout(function(){
      //  	$('#mycursor').hide();
			// 	$('#mycursor .right').hide();
      //  	return false;
    	// });
    	// $('.slides-navigation div.navigate-right').mouseenter(function(){
      //  	$('#mycursor').show();
			// 	$('#mycursor .right').show();
      //  	return false;
    	// });
    	// $('.slides-navigation div.navigate-right').mousemove(function(e){
      //  	$('#mycursor').css('left', e.clientX).css('top', e.clientY);
    	// });
			//
			// $('.crosser').mouseout(function(){
      //  	$('#mycursor').hide();
			// 	$('#mycursor .cross').hide();
      //  	return false;
    	// });
    	// $('.crosser').mouseenter(function(){
      //  	$('#mycursor').show();
			// 	$('#mycursor .cross').show();
      //  	return false;
    	// });
    	// $('.crosser').mousemove(function(e){
      //  	$('#mycursor').css('left', e.clientX).css('top', e.clientY);
    	// });

			$(document).on('click', '.crosser', function(){
				window.location = "/";
			});
	});

})(jQuery, this);
