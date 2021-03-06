<?php
class view_startpage{

function printpage(){

echo <<<html

<html lang="sv">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="En sida som besiriver fakta om gluten och laktos.">
    <title>AllergiInfo.se</title>

</head>
<body>

    <div class="parallax1">
        <div class="heding">

         Allergi Info

        </div>
        <div id="ruta1"></div>
    </div>

    <section>
      <header>
        <div class="container">
              <h1>Allergi Info</h1>
            <ul>
                <li id="home"><a>Hem</a></li>
                <li id="Aboute"><a>Gluten</a></li>
                <li id="Fakta"><a>Laktos</a></li>
                <li id="info"><a>Kontakta</a></li>
            </ul>
        </div>
        <div class="topnav">
  </div>
      </header>
        <h1>Skillnader på Mjölkprotein och Laktosintolerant</h1>
        <div class="tow-col">

        </div>
    <p>
      Mjölkproteinintolerans innebär att kroppens immunförsvar överreagerar mot en eller flera proteiner i mjölken.
      Mjölkproteinintolerans är något som växer bort hos de flesta till vuxen ålder.  Mjölkproteinintoleranta personer
       rekommenderas att hitta en växtbaserad ersättning till mjölkprodukter eftersom mjölkproteinintoleranta varken tål
       vanlig mjölk eller laktosfri.

      <br>
      <br>

      Laktosintolerans innebär att tunntarmen har en minskad förmåga att ta upp mjölksocker, så kallat laktos.
      Laktosintoleranta rekommenderas att äta en laktosfri variant av produkter med mjölk i alternativt produkter
      som naturligt är av låg laktoshalt. Tex hårdost.
    </p>
    </section>


    <div class="parallax2">

    </div>

    <div class="dark">
        <h3>Skillnaden på intolerans och allergi?</h3>
        <div class="tow-col">

        </div>
            Förenklat kan man säga att en allergi är när kroppens immunförsvar bildar antikroppar mot ett ämne som kroppen
            normalt skulle tolerera. Dessa allergiframkallande ämnen kallas allergener. Allergener finns inte bara i livsmedel,
            det finns överallt i vår miljö tex i polen och pälsdjur.
<p>
  I fallet med intolerans eller “icke-allergisk födoämnesöverkänslighet” som det också kallas, så har intolerans inte något med immunförsvaret att göra. Intolerans har med att man reagerar på livsmedel med högt aminieinehåll. Det finns olika slags aminer bla histamin. Pga kroppens avsaknad att bryta ner histamin, så leder det till en hög histamin nivå vilket skapar en allergisk reaktion.</p>

      <!-- <img src="img/pexels-nataliya-vaitkevich-4813970 (1).jpg" id="dödfisk"> -->

    <!--  <p><iframe src="https://docs.google.com/forms/d/e/1FAIpQLScjEiBtQ9jZMOHGGvYBL2K9ON041oqJ77xSJMf9dAMCqLQjpQ/viewform?embedded=true" width="700" height="520" frameborder="0" marginheight="0" marginwidth="0">Läser in …</iframe></p>
    -->

  </div>
  <div class="parallax3">

  </div>
  <div class="dark">
      <h3>Laktos</h3>
      <div class="tow-col">

      </div>
      Laktosintolerans innebär att tunntarmen har en minskad förmåga att ta upp mjölksocker, så kallat laktos. Laktosintoleranta rekommenderas att äta en laktosfri variant av produkter med mjölk i alternativt produkter som naturligt är av låg laktoshalt. Tex hårdost. Produkter som vanligtvis innehåller laktos är Mjölk, glass, choklad.

    <!-- <img src="img/pexels-nataliya-vaitkevich-4813970 (1).jpg" id="dödfisk"> -->

  <!--  <p><iframe src="https://docs.google.com/forms/d/e/1FAIpQLScjEiBtQ9jZMOHGGvYBL2K9ON041oqJ77xSJMf9dAMCqLQjpQ/viewform?embedded=true" width="700" height="520" frameborder="0" marginheight="0" marginwidth="0">Läser in …</iframe></p>
  -->

</div>

    <div class="parallax4">

    </div>
    <div class="dark">
        <h3>Gluten</h3>
        <div class="tow-col">

        </div>
        Celiaki innebär att ditt immunförsvar reagerar mot proteinet gluten som finns i vete, råg och korn. Vilket leder till att tunntarm blir inflammerad och kan inte ta upp näring som den ska. De vanligaste symtomen är magbesvär, trötthet och att gå ner i vikt. Behandlingen går ut på att sluta äta gluten.

  Gluten finns i livsmedel som innehåller spannmål, såsom pasta, bröd, pannkakor och mjöl.Men såklart finns det glutenfria varianter.


  </div>

      <div class="parallax5">

      </div>

      <footer>
      <br>
      Kontakta:
      <br>
      andsva2@kfvelev.se
      <br>
      peteri1@kfvelev.se
      <br>
      <br>
      <br>


      </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js" integrity="sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="java.js">
    </script>
</body>
</html>

html;
  }
}
