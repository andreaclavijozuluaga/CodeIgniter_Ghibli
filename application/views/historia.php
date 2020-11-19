<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
  </style>
  <title>Historia</title>
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
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide">HISTORIA</h2>
    <p class="w3-opacity"><i>スタジオジブリ</i></p>
    <p class="w3-justify">Estudio de animación japonés, con sede en Tokio. Fue fundada en 1985 por Hayao Miyazaki y Isao Takahata, y a día de hoy, han realizado más de 20 películas, además de otras clases de trabajos (cortometrajes, anuncios publicitarios, ...). Tienen el respeto del público japonés y también el internacional, donde la crítica y el sector de la animación le presenta muchos respetos. Debido a su popularidad, se abrió el Museo Ghibli, el cual se encuentra a las afueras de Tokio y para el 2022 se espera tener listo el Ghibli Park[1].</p>

    <p class="w3-justify">El nombre de Ghibli se basa en el nombre arábico del siroco, o viento mediterráneo, que fue utilizado por los italianos para nombrar a sus aviones de exploración del Sahara en la Segunda Guerra Mundial. La teoría de este nombre, sería que ellos están «Soplando» un nuevo aire dentro de la industria de la animación.</p>

    <p class="w3-justify">Fue fundada en junio de 1985 por Hayao Miyazaki y Isao Takahata, quienes serían los primeros directores; y Toshio Suzuki, que actuaria de productor y presidente de la compañía.</p>

    <p class="w3-justify">Antes de su fundación, Hayao y Isao tiene una larga carrera dentro de la animación, tanto para la televisión como para el cine, donde se destaca series como Heidi, Marcos o Lupin III:El castillo de Cagliostro; y Suzuki era editor de la revista Animage, firma de Tokuma Shoten.</p>

    <p class="w3-justify">El estudio fue resultado del éxito que alcanzó la película de Nausicaä del Valle del Viento, de 1984, dirigida por Hayao Miyazaki para Topcraft y distribuida por Toei Animation. Suzuki fue parte de la producción de esta película. Tras la realización de Mi vecino Totoro, uno de sus personajes, Totoro, pasó a ser el logo de la compañía en 1988.</p>

    <p class="w3-justify">Entre 1999 al 2005, Ghibli fue una subsidiaria de la editorial Tokuma Shoten, la cual publica la revista Animage, lo que permitió estrechar lazos entre ellos, publicando regularmente artículos sobre el estudio o su personal en la sección titulada «Notas Ghibli». Además, frecuentemente ilustraciones sobre sus películas o otros trabajos aparecen como portada de la revista.</p>

    <p class="w3-justify">Entre 1999 al 2005, Ghibli fue una subsidiaria de la editorial Tokuma Shoten, la cual publica la revista Animage, lo que permitió estrechar lazos entre ellos, publicando regularmente artículos sobre el estudio o su personal en la sección titulada «Notas Ghibli». Además, frecuentemente ilustraciones sobre sus películas o otros trabajos aparecen como portada de la revista.</p>

    <p class="w3-justify">En octubre de 2001, se inauguro el Museo Ghibli. Contiene material sobre sus obras y muestran animaciones, incluyendo una serie de cortometrajes que únicamente se emiten aquí.</p>

    <div class="w3-row w3-padding-32">
      <div class="w3-third">
        <p>Hayao Miyazaki</p>
        <img src="<?php echo base_url().'assets/img/Hayao_Miyazaki.jpg'?>" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
      </div>
      <div class="w3-third">
        <p>Isao Takahata</p>
        <img src="<?php echo base_url().'assets/img/Isao_Takahata.jpg'?>" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
      </div>
      <div class="w3-third">
        <p>Toshio Suzuki</p>
        <img src="<?php echo base_url().'assets/img/Toshio_Suzuki.jpg'?>" class="w3-round" alt="Random Name" style="width:60%">
      </div>
    </div>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/HoLtyQwRn5c" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
</body>
</html>