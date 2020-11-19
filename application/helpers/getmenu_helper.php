<?php
function main_menu()
{
  return array (
      array(
        'title' => 'Inicio',
        'url' => base_url('index.php/pagina'),
      ),
      array(
        'title' => 'Acerca de Studio Ghibli',
        'url' => base_url('index.php/historia'),
      ),
      array(
        'title' => 'Museo',
        'url' => base_url('index.php/museo'),
      ),
    );
}

function main_movie()
{
  return array (
      array(
        'title_movie' => 'Mi vecino Totoro / となりのトトロ',
        'url_movie' => base_url('index.php/Tonari_no_Totoro'),
      ),
      array(
        'title_movie' => 'El cuento de la princesa Kaguya / かぐや姫の物語',
        'url_movie' => base_url('index.php/Kaguya_hime'),
      ),
      array(
        'title_movie' => 'La princesa Mononoke / もののけ姫',
        'url_movie' => base_url('index.php/Mononoke_Hime'),
      ),
      array(
        'title_movie' => 'El regreso del gato / 猫の恩返し',
        'url_movie' => base_url('index.php/Neko_no_Ongaeshi'),
      ),
    );
}