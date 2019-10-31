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
	var swiper = new Swiper('.swiper-container', {
    direction: 'horizontal',
    loop: true,
    slidesPerView: 1,
    spaceBetween: 30,
    autoplay: {
        delay: 1500,
        disableOnInteraction: false,
      },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
});