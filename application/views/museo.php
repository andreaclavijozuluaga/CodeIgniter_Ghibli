<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    body,h1,h2,h3,h4,h5,h6 {
      font-family: "Raleway", sans-serif
      }
    .w3-quarter img{
      margin-bottom: -6px;
      }
    .w3-quarter img:hover{
      opacity: 0.6; transition: 0.3s
      }
  </style>
  <title>Nuestros Servicios</title>
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
    <img class="w3-image" src="<?php echo base_url().'assets/img/ghibli_map.jpg' ?>" alt="Totoro durmiendo" width="1600" height="1060">
  </header>
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide">MUSEO GHIBLI</h2>
    <p class="w3-opacity"><i>Mitaka, Tokio, Japón</i></p>
    <p class="w3-justify">El Museo Ghibli es un museo comercial que exhibe los trabajos de anime hechos por el Estudio Ghibli. Fue inaugurado en 2001. El museo está ubicado en Mitaka, Japón, al oeste de Tokio.</p>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/xqt0wiM536w" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
  <div class="w3-container w3-content w3-center w3-padding-24" style="max-width:800px" id="band">
    <h2 class="w3-wide">TRANSPORTE</h2>
    <p class="w3-opacity"><i>Mitaka</i></p>
    <p class="w3-justify">El museo está a unos 20 minutos de la estación Mitaka. Al salir de la estación se pueden ver letreros que indican de donde salen los buses en dirección al museo. Si se desea, se puede ir caminado, es un poco más de un kilómetro que se puede recorrer a lo largo de un río. La dirección exacta es 1-1-83 Shimorenjaku, Mitaka-shi, Tokio 181-0013.</p>
  </div>
  <img class="w3-image" src="<?php echo base_url().'assets/img/guia_museo.jpg' ?>" alt="Totoro durmiendo" width="1600" height="1060">
  <div class="w3-container w3-content w3-center w3-padding-24" style="max-width:800px" id="band">
    <h2 class="w3-wide">ATRACCIONES</h2>
    <p class="w3-opacity"><i>Las principales zonas en las que se divide son:</i>
      <p>1. Cine Saturno</p>
      <p>2. Exhibiciones permanentes</p>
      <p>3. Exhibiciones extraordinarias</p>
      <p>4. Sala del Gato-bús</p>
      <p>5. Terraza superior con la réppca a tamaño real del robot de ‘El Castillo en el Cielo’, el guardián del museo.</p>
      <p>6. Tienda “Mamma Aiuto”</p>
      <img src="<?php echo base_url().'assets/img/museo1.jpg'?>" class="w3-image w3-padding-32" width="600" height="650">
      <img src="<?php echo base_url().'assets/img/museo2.jpg'?>" class="w3-image w3-padding-32" width="600" height="650">
      <img src="<?php echo base_url().'assets/img/museo4.jpg'?>" class="w3-image w3-padding-32" width="600" height="650">
      </div>
  </div>
  <div class="w3-container" id="where" style="padding-bottom:32px;">
    <div class="w3-content" style="max-width:700px">
      <h5 class="w3-center w3-padding-24"><span class="w3-tag w3-wide">PARA MÁS INFORMACIÓN</span></h5>
      <p>Escribenos y muy pronto estaremos contactando contigo.</p>
      <img src="<?php echo base_url().'assets/img/typing.gif'?>" class="w3-image  w3-padding-24" style="width:100%">
      <form action="<?php echo base_url().'index.php/museo/guardar' ?>" method='POST' target="_blank">
      <!-- DIRECCIONAMOS AL CONTROLADOR Y NOMBRE DE LA FUNCION echo base_url().'index.php/museo/guardar' -->
        <p><input name='nombre' class="w3-input w3-padding-16 w3-border" type="text" placeholder="Nombre y Apellido" required ></p>
        <p><input name='correo' class="w3-input w3-padding-16 w3-border" type="e-mail" placeholder="Correo Electronico" required ></p>
        <p>Cuando deseas visitar el museo?</p>
        <p><input  name='fecha' class="w3-input w3-padding-16 w3-border" type="datetime-local" placeholder="Fecha" required  value="2020-11-16T20:00"></p>
        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Mensaje" required name="mensaje_usuario"></p>
        <p><button class="w3-button w3-black" type="submit">ENVIAR</button></p>
      </form>
      <form action="<?php echo base_url().'index.php/consultar' ?>" class="w3-padding-16">
        <button class="w3-button w3-black" type="submit">CONSULTAR REGISTROS</button>
      </form>
      <form action="<?php echo base_url().'index.php/actualizar' ?>">
        <button class="w3-button w3-black " type="submit">ACTUALIZAR</button>
      </form>
    </div>
</div>
</body>
</html>