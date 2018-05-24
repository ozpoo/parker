(function ($, root, undefined) {

	$(function () {

		$(window).on("load", function() {
			init();
			animate();
		});

		var init = function() {
			document.addEventListener("touchstart", function() {}, true);

			$(".slide[data-slide='0']").addClass("current");

			// Check if we are loading the home page
			if($(".page-home")){
				setTimeout(function(){
					$("main").addClass("show");
				},400);
				setTimeout(function(){
					$(".intro").addClass("hide");
				},1800);
			}else{
				$("main").addClass("show");
			}

			$(".low_res").each(function() {
				var $image = $(this);
				var $downloadingImage = $("<img>");
				$downloadingImage.load(function(){
				  $($image).attr("src", $(this).attr("src"));
				});
				$downloadingImage.attr("src", $($image).data("high"));
			});

			$(document).on('click', '.crosser', function() {
				window.location = "/";
			});

			$(document).on('click', '.navigate-left', function() {
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

			$(document).on('click', '.navigate-right', function() {
				var current = $(".slide.current").data("slide");
				var next = current;
				if(current + 1 >= $(".slide").size()){
					next = 0;
				}else{
					next = current + 1;
				}
				$(".slide").eq(current).removeClass("top");
				$(".slide").eq(next).addClass("top").addClass("current");
				setTimeout(function(current){
					$(".slide").eq(current).removeClass("current");
				}, 0, current);
			});
		};

		var animate =  function() {
			requestAnimationFrame( animate );
		};

		var requestAnimationFrame = function() {
	    return (
	        window.requestAnimationFrame       ||
	        window.webkitRequestAnimationFrame ||
	        window.mozRequestAnimationFrame    ||
	        window.oRequestAnimationFrame      ||
	        window.msRequestAnimationFrame     ||
	        function(callback){
	            window.setTimeout(callback, 1000 / 60);
	        }
	    );
		}();

	});

})(jQuery, this);
