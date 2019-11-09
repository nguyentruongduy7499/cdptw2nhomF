$(document).ready(function(){

	$(window).scroll(function(event){
		var scroll = $(document).scrollTop();
		if(scroll >= $('.scroll').height()){
			$('.scroll').addClass('hh');
		}
		else{
			$('.scroll').removeClass('hh');
		}
	});
	$('#mo').click(function(){
		openSearch();

	});
	$('#dong').click(function(){
		closeSearch();
	});

	function openSearch() {
		$("#myOverlay").show();
	}

	function closeSearch() {
		document.getElementById("myOverlay").style.display = "none";
	}

	$('#opener').click(function(){
		closeNav();

	});
	$('#dai').click(function(){
		openNav();
	});

	function openNav() {

		$('#myNav').css({'width':'35%'});
	}

	function closeNav() {
		$('#myNav').css({'width':'0'});
	}
	var swiper = new Swiper('.so1', {
		direction: 'horizontal',
		loop: true,
		slidesPerView: 1,
		spaceBetween: 30,

		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
			renderBullet: function (index, className) {
				return '<span class="' + className + '">' + (index + 1) + '</span>';
			},

		},
 });
	swiper.on('transitionEnd', function() {
		var currentIndex = swiper.realIndex+1;
		switch(currentIndex){
			case 1:
			$('.number-next').text(2);
			$('.number-prev').text(3);
			break;
			case 2:
			$('.number-next').text(3);
			$('.number-prev').text(1);
			break;
			case 3:
			$('.number-next').text(1);
			$('.number-prev').text(2);
			break;
		}
	});
});