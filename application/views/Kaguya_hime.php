<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Kaguya Hime</title>
</head>
<body>
  <div class="w3-bar w3-black w3-hide-small">
    <img class="w3-right" src="<?php echo base_url().'assets/img/logo_studio.png'?>" alt="" width="125" height="58">
    <?php
    foreach($menu as $item) :
    ?>
      <a href="<?= $item['url'] ?>" style="padding-top: 18px; padding-bottom: 18px;" class="w3-bar-item w3-button"><?= $item['title'] ?></a>
    <?php
    endforeach;
    ?>
    <div style="padding-top: 10px;" class="w3-dropdown-hover w3-hide-small">
        <button  class="w3-button" title="More" >Peliculas <i class="fa fa-caret-down"></i></button>
        <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <?php
        foreach($movie as $item_m) :
        ?>
        <a href="<?= $item_m['url_movie'] ?>" class="w3-bar-item w3-button"><?= $item_m['title_movie'] ?></a>
        <?php
        endforeach;
        ?>
        </div>
      </div>
  </div>
  <header class="w3-display-container w3-wide" id="home">
    <img class="w3-image" src="<?php echo base_url().'assets/img/kaguya_hime.jpg' ?>" alt="Totoro durmiendo" width="1600" height="1060">
    <div class="w3-display-left w3-padding-large">
      <h1 class="w3-text-white" style="text-shadow: 3px 3px 2px #696;
   color: #666;">かぐや姫の物語, Kaguya-hime no Monogatari</h1>
      <h1 class="w3-jumbo w3-text-white w3-hide-small" style="text-shadow: 3px 3px 2px #696;
   color: #666;"><b>STUDIO GHIBLI</b></h1>
    </div>
  </header>
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide">ARGUMENTO</h2>
    <p class="w3-opacity"><i>El cuento de la princesa Kaguya</i></p>
    <p class="w3-justify">La historia comienza cuando una pareja de ancianos campesinos encuentran a una niña diminuta dentro de una planta de bambú y deciden adoptarla como su hija. Convertida rápidamente en una hermosa mujer, es pretendida por muchos hombres, incluido el emperador. Sin embargo, su inicial júbilo se ve reducido a tristeza, pues asegura que vendrán por ella las personas de la Luna, lugar del que es originaria.</p>
    <p class="w3-justify">El cartel promocional anuncia "El crimen de una princesa y su castigo" y parte de la premisa de una hermosa mujer que nació de un bambú cuyo cortador acoge en su hogar donde será criada, junto con la esposa del cortador, como una hija.</p>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/W71mtorCZDw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
  <img class="w3-image" src="<?php echo base_url().'assets/img/kaguya.jpg' ?>" alt="Totoro durmiendo" width="1600" height="1060">
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide">PRODUCCIÓN</h2>
    <p class="w3-opacity"><i>El cuento de la princesa Kaguya</i></p>
    <p class="w3-justify">En 2008, Studio Ghibli reveló que Isao Takahata estaba produciendo un largometraje. A finales de 2012 se confirmó el lanzamiento de la cinta.5​ Posteriormente, Takahata comentó en el Festival Internacional de Cine de Locarno que estaría interesado en adaptar cinematográficamente el cuento popular japonés El cortador de bambú.</p>
    <p class="w3-justify">Finalmente, El cuento de la princesa Kaguya, junto con otra producción del estudio, El viento se levanta, de Hayao Miyazaki, fue anunciada oficialmente por uno de los productores de Studio Ghibli, Toshio Suzuki, y Tōhō el 13 de diciembre de 2012.</p>
  </div>
  <img class="w3-image" src="<?php echo base_url().'assets/img/kaguya_bebe.jpg' ?>" alt="Totoro durmiendo" width="1600" height="1060">
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide">BANDA SONORA</h2>
    <p class="w3-opacity"><i>El cuento de la princesa Kaguya</i></p>
    <p class="w3-justify">En 2012, se anunció que Shinichiro Ikebe se encargaría de la composición de la banda sonora. El 4 de febrero de 2013, se anunció que Joe Hisaishi sería el compositor final de la película, reemplazando a Ikebe en el puesto, ya que este pasó a ser el editor de sonido. Se trató de la primera colaboración de Hisaishi en un largometraje dirigido por Isao Takahata, además de ser también la primera vez que compuso dos bandas sonoras para dos largometrajes del estudio a la vez. La otra producción de Ghibli era El viento se levanta, de Hayao Miyazaki.8​ La canción principal, "When I Remember This Life", es interpretada por Kazumi Nikaidō.9​ La banda sonora de la película fue lanzada el 20 de noviembre de 2013.</p>
    <p class="w3-justify">Todas las canciones escritas y compuestas por Joe Hisaishi.</p>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/HK8VC2IKVHM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
</body>
</html>