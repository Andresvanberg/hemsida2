$(".nav").css({'position': 'static', 'background-color': 'white'});
document.addEventListener("scroll", myScroll);

function myScroll(){

console.log(document.documentElement.scrollTop);

if(document.documentElement.scrollTop>=920){

  $(".nav").css({'position': 'fixed', 'margin-left': 'auto',  });

  }
  else {
    $(".nav").css({'position': 'static'});

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

  console.log("Skada?");
  
  window.scrollTo({
    top: 1200,
    left: 0,
    behavior: 'smooth'
    });
  });
$("#Fakta").click( function(){

    console.log("Fakta");
    
    window.scrollTo({
      top: 2200,
      left: 0,
      behavior: 'smooth'
      });
    });
$("#effektrer").click( function(){

      console.log("effektrer");
      
      window.scrollTo({
        top: 3000,
        left: 0,
        behavior: 'smooth'
        });
      });
$("#info").click( function(){

        console.log("info");
        
        window.scrollTo({
          top: 3700,
          left: 0,
          behavior: 'smooth'
          });
        });

        
