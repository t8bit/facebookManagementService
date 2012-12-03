 // tipsy

 $(function() {
   $('.flag').tipsy({gravity: 'n'});   
 });
 $(function() {
   $('.link').tipsy({gravity: 's'});   
 });

 // register modal

 openRegister=function() {
   $("div#bg-popup-register").fadeIn("fast");
   $("div#overlay").fadeIn("slow");
   $("div#overlay").css("height", $(document).height()+"px");
 }
 closeRegister=function() {
   $("div#bg-popup-register").fadeOut("fast");
   $("div#overlay").fadeOut("fast"); 
 } 

 // login modal

 openLogin=function() {
   $("div#bg-popup-login").fadeIn("fast");
   $("div#overlay").fadeIn("slow"); 
   $("div#overlay").css("height", $(document).height()+"px");
 }
 closeLogin=function() {
   $("div#bg-popup-login").fadeOut("fast");
   $("div#overlay").fadeOut("fast"); 
 } 
