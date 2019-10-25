$(document).ready(function(){
// Swiper: Slider
var swiper = new Swiper('.swiper-container', {
    loop: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    
    keyboard: {
      enabled: true,
      onlyInViewport: false
  },
  slidesPerView: 3,
  paginationClickable: true,
  spaceBetween: 20,
  breakpoints: {
    1920: {
        slidesPerView: 3,
        spaceBetween: 30
    },
    900: {
        slidesPerView: 1,
        spaceBetween: 30,

    },
    480: {
        slidesPerView: 1,
        spaceBetween: 10
    }
}
});


$('.holder').click(function(){

    var i = $(this).attr("id");
    if(i == "mo"){
       // alert(i);
        $(this).click(function(){
            OpenS();
        });
        $('#close').click(function(){
            CloseS();
        });
    }
     if(i == "mo1"){
       // alert(i);
        $(this).click(function(){
            OpenS1();
        });
        $('#close1').click(function(){
            CloseS1();
        });
    }
     if(i == "mo2"){
       // alert(i);
        $(this).click(function(){
            OpenS2();
        });
        $('#close2').click(function(){
            CloseS2();
        });
    }
     if(i == "mo3"){
       // alert(i);
        $(this).click(function(){
            OpenS3();
        });
        $('#close3').click(function(){
            CloseS3();
        });
    }
     if(i == "mo4"){
       // alert(i);
        $(this).click(function(){
            OpenS4();
        });
        $('#close4').click(function(){
            CloseS4();
        });

    }
     if(i == "mo5"){
       // alert(i);
        $(this).click(function(){
            OpenS5();
        });
        $('#close5').click(function(){
            CloseS5();
        });
        
    }
    
});
function OpenS() {
    $('#tintuc').css({'display':'block'});
}
function CloseS() {
    $('#tintuc').css({'display':'none'});
}
function OpenS1() {
    $('#tintuc1').css({'display':'block'});
}

function CloseS1() {
    $('#tintuc1').css({'display':'none'});
}

function OpenS2() {
    $('#tintuc2').css({'display':'block'});
}

function CloseS2() {
    $('#tintuc2').css({'display':'none'});
}

function OpenS3() {
    $('#tintuc3').css({'display':'block'});
}

function CloseS3() {
    $('#tintuc3').css({'display':'none'});
}

function OpenS4() {
    $('#tintuc4').css({'display':'block'});
}

function CloseS4() {
    $('#tintuc4').css({'display':'none'});
}

function OpenS5() {
    $('#tintuc5').css({'display':'block'});
}

function CloseS5() {
    $('#tintuc5').css({'display':'none'});
}

//cong
$('.right').click(function(){

    $("input[type='text']").val(Cong());
});
//tru
$('.left').click(function(){
    var x=Number("0");
    if(Tru() <= x )
    {
        $("input[type='text']").val(x);
        
    }
    else{
       $("input[type='text']").val(Tru());
   }
});


function Cong(){
 var x = $('.d').val();
 var a = Number(x);
 return a+1;
}
function Tru(){
 var x = $('.d').val();
 var a = Number(x); 
 var d = a-1;
 return d;  
}
});
