 $(document).ready(function() {
      $('.progress .progress-bar').css("width",
                function() {
                    return $(this).attr("aria-valuenow") + "%";
                }
        )
    });
 var myVar=setInterval(function(){myTimer()},2);
var count = 0;
function myTimer() {
if(count < 45){
  $('.pro').css( count + "%");
  count += 0.06;
   document.getElementById("demo").innerHTML = Math.round(count) +"%";
   // code to do when loading
  }
  if(count < 76){
  $('.pro1').css( count + "%");
  count += 0.06;
   document.getElementById("demo1").innerHTML = Math.round(count) +"%";
   // code to do when loading
  }
  if(count < 76){
  $('.pro1').css( count + "%");
  count += 0.06;
   document.getElementById("demo2").innerHTML = Math.round(count) +"%";
   // code to do when loading
  }
  if(count < 76){
  $('.pro1').css( count + "%");
  count += 0.06;
   document.getElementById("demo3").innerHTML = Math.round(count) +"%";
   // code to do when loading
  }
  else if(count > 99){  
      // code to do after loading
  count = 0;

  
  }
}


