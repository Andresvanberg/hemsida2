document.addEventListener("scroll", myScroll);

function myScroll(){

console.log(document.documentElement.scrollTop);

if(document.documentElement.scrollTop>=920){

  $(".nav").css({'position': 'fixed', 'background-color': 'blue', 'margin-left': 'auto',  });

  }
  else {
    $(".nav").css({'position': 'static', 'background-color': 'white'});

  }
}





$("#home").click( function(){

console.log("home");

window.scrollTo({
  top: 0,
  left: 0,
  behavior: 'smooth'
  });
});
$("#Aboute").click( function(){

  console.log("Aboute");
  
  window.scrollTo({
    top: 2000,
    left: 0,
    behavior: 'smooth'
    });
  });

/*
 $(window).scroll(function(){ 
    var $el = $("nav"); 
    var isPositionFixed = ($el.css('position') == 'fixed');
    if ($(this).scrollTop() > 200 && !isPositionFixed){ 
      $el.css({'position': 'fixed', 'top': '0', 'z-index': '100'}); 
      console.log('hej');
    }
    if ($(this).scrollTop() < 200 && isPositionFixed){
      $el.css({'position': 'static', 'top': ''}); 
      console.log('då');
    } 
  });


  */
