var num = parseInt(localStorage.getItem("cookies"));
$("#numbers").text(""+num);
$(document).ready(function(){
    
    $("#cookie").on('click',function(){
        num+=1;
        
        console.log("test");
        $("#numbers").text(""+num);
        var i=num;
    localStorage.setItem("cookies", i);

        
    });
  });
  $("#Reset").on('click',function(){

    localStorage.setItem("cookies", 0);
    num=0;
    $("#numbers").text(""+num);
});

