<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <title>Consulta registro</title>
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
  <div class="w3-container" id="where" style="padding-bottom:32px;">
    <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-24"><span class="w3-tag w3-wide">MENÚ PARA MODIFICAR DATOS</span></h5>
      <form action="<?php echo base_url().'index.php/actualizar/update' ?>" method='POST' >
      <p><input name='id' class="w3-input w3-padding-16 w3-border" type="text" placeholder="Ingrese ID para modificar" required ></p>
        <p><input name='nombre' class="w3-input w3-padding-16 w3-border" type="text" placeholder="Nombre y Apellido" required ></p>
        <p><input name='correo' class="w3-input w3-padding-16 w3-border" type="e-mail" placeholder="Correo Electronico" required ></p>
        <p>Cuando deseas visitar el museo?</p>
        <p><input  name='fecha' class="w3-input w3-padding-16 w3-border" type="datetime-local" placeholder="Fecha" required  value="2020-11-16T20:00"></p>
        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Mensaje" required name="mensaje_usuario"></p>
        <p><button class="w3-button w3-black" type="submit">ENVIAR</button></p>
        <!-- <select name="select" id="">
          <option value="concierto">todos nuestros conciertos</option>
          <option value="bandas">todas nuestras bandas</option>
        </select> -->
        </form>
    </div>
  </div>
</body>
</html>