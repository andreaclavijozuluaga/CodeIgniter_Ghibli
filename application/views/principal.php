<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    h1,h2,h3,h4,h5,h6 {
      font-family: "Oswald"
      }
    body {
      font-family: "Open Sans"
      }
  </style>
  <title>Pagina web con CodeIgniter</title>
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

<div class="w3-content" style="max-width:1600px">
  <header class="w3-container w3-center w3-padding-24 w3-white">
    <h1 class="w3-xxxlarge"><b>Andrea Clavijo Zuluaga</b></h1>
    <h6>Bienvenidos en este espacio hablaremos del <span class="w3-tag">Studio Ghibli</span></h6>
  </header>

  <header class="w3-display-container w3-wide" id="home">
    <img class="w3-image" src="<?php echo base_url().'assets/img/tren.gif' ?>" alt="Totoro durmiendo" width="1600" height="1060">
    <div class="w3-display-left w3-padding-large">
      <h1 class="w3-text-white">Tokuma Shoten</h1>
      <h1 class="w3-jumbo w3-text-white w3-hide-small"><b>STUDIO GHIBLI</b></h1>
    </div>
  </header>
</body>
</html>