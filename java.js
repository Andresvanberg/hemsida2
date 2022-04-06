$("#home").click( function(){

console.log("home");

window.scrollTo({
  top: 0,
  left: 0,
  behavior: 'smooth'
  });
});
$("#Aboute").click( function(){

  console.log("tjock");

  var element = document.getElementByClass(".tow-col");

  element.scrollIntoView();
  element.scrollIntoView({block: "start"});
  element.scrollIntoView({behavior: "smooth", block: "start", inline: "nearest"});

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
