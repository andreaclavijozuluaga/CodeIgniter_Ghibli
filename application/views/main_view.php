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
  <h1>Mostrando datos</h1>
  <div>
    <table class="table table-bordered">
      <tr>
        <th>id</th>
        <th>nombre</th>
        <th>correo</th>
        <th>fecha</th>
        <th>Mensaje</th>
      </tr>
      <?php
      if($fetch_data->num_rows() > 0) {
        foreach($fetch_data->result() as $row) {
      ?>
          <tr>
            <td><?php echo $row->id;  ?></td>
            <td><?php echo $row->nombre;  ?></td>
            <td><?php echo $row->correo;  ?></td>
            <td><?php echo $row->fecha;  ?></td>
            <td><?php echo $row->mensaje_usuario;  ?></td>
          </tr>
      <?php
        }
      } else {
      ?>
        <tr>
          <td>No se encontraron resultados</td>
        </tr>
      <?php
      }
      ?>
    </table>
</body>
</html>