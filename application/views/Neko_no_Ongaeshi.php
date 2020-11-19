<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Neko no Ongaeshi</title>
</head>
<body>
  <div class="w3-bar w3-black w3-hide-small">
    <img class="w3-right" src="<?php echo base_url().'assets/img/logo_studio.png'?>" alt="" width="125" height="58">
    <!-- <a href="https://www.instagram.com/ghibli.movies/?hl=es-la" class="w3-bar-item w3-button"><i class="fa fa-instagram"></i></a> -->
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
    <img class="w3-image" src="<?php echo base_url().'assets/img/neko.gif' ?>" alt="Totoro durmiendo" width="1600" height="1060">
    <div class="w3-display-right w3-padding-large">
      <h1 class="w3-text-white" style="text-shadow: 3px 3px 2px #2F4F4F;
   color: #666;">El regreso del gato, 猫の恩返し</h1>
      <h1 class="w3-jumbo w3-text-white w3-hide-small" style="text-shadow: 3px 3px 2px #2F4F4F;
   color: #666;"><b>STUDIO GHIBLI</b></h1>
    </div>
  </header>
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide">ARGUMENTO</h2>
    <p class="w3-opacity"><i>猫の恩返し lit. La gratitud de los gatos</i></p>
    <p class="w3-justify">En 1995, Studio Ghibli estrenó la película Mimi wo sumaseba (también conocida como Whisper of the Heart o Susurros del corazón), basada en un manga de Aoi Hiiragi, cuyo argumento trata de una chica y la amistad y posterior romance que nace con un compañero de colegio, y parte de la historia es cómo la muchacha escribe una novela fantástica cuyo personaje principal se llamaba Barón. A pesar de que la vida de la chica no poseía ningún tipo de elemento mágico, sí se incluían escenas cortas de carácter fantástico que mostraban lo que la chica estaba escribiendo. Estas escenas, aunque cortas, se hicieron tan populares que los aficionados reclamaron que se produjera una película basada en la supuesta novela: el resultado fue Haru en el reino de los gatos.</p>
    <p class="w3-justify">La idea para lo que más tarde sería Haru en el reino de los gatos surgió a partir del llamado "Proyecto Gato" en 1999. Un parque de atracciones japonés solicitó al Studio Ghibli que crease un cortometraje de animación de 20 minutos, protagonizado por gatos. Hayao Miyazaki quería que en este corto aparecieran tres elementos clave: el Barón, Muta y una misteriosa tienda de antigüedades. Se encargó la producción del manga basado en el corto a Hiiragi, que se titularía Baron: The Cat Returns (バロン 猫の男爵 Baron: Neko no Danshaku?, lit. Baron: el gato Barón'). El proyecto, sin embargo, fue finalmente cancelado.</p>
  </div>
  <img class="w3-image" src="<?php echo base_url().'assets/img/neko_1.jpg' ?>" alt="Totoro durmiendo" width="1600" height="1060">
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide">PRODUCCIÓN</h2>
    <p class="w3-opacity"><i>もののけ姫 Mononoke Hime</i></p>
    <p class="w3-justify">A finales de la década de 1970, Miyazaki dibujó bosquejos de una película sobre una princesa que vivía en el bosque con una bestia. Miyazaki comenzó a escribir el argumento de la película y dibujó los guiones gráficos iniciales para la cinta en agosto de 1994.7​ Sin embargo, tuvo dificultades para adaptar sus ideas y visualizaciones iniciales, debido a que varios elementos ya habían sido utilizados en Mi vecino Totoro, así como también a los cambios sociales ocurridos desde la creación de los primeros bocetos y guiones. Este suceso le llevaría a aceptar crear el video promocional para la canción On Your Mark del dúo musical Chage y Aska. De acuerdo con Toshio Suzuki, esto permitió a Miyazaki volver a iniciar la creación del filme con nuevos ánimos. En abril de 1995, el supervisor de animación Masashi Ando ideó los diseños de los personajes basándose en el guion gráfico de Miyazaki. En mayo de 1995, Miyazaki dibujó los guiones gráficos iniciales. Ese mismo mes, Miyazaki y Ando visitaron los antiguos bosques de Yakushima, en la isla de Kyūshū, que previamente también sirvieron de inspiración para el paisaje de Nausicaä del Valle del Viento, y las montañas de Shirakami-Sanchi en el norte de Honshu. Fueron acompañados por un grupo de directores artísticos, artistas de fondo y animadores digitales durante tres días.7​ La animación comenzó oficialmente en julio de 1995. Miyazaki personalmente supervisó cada uno de los 144 000 cm³ (centímetros cúbicos) de la película,8​ y se estima que se rediseñaron escenas de 80.000 de ellos.9​10​ Los guiones gráficos del final de la película fueron terminados apenas meses antes de la fecha de estreno en Japón.</p>
    <p class="w3-justify">Inspirado por el director irlandés-estadounidense John Ford, quien es conocido por sus películas del medio oeste, Miyazaki creó la ciudad de hierro como una «ciudad de gente muy unida» y la pobló con «personajes de grupos marginados y minorías oprimidas que rara vez aparecen en películas japonesas», siendo también personajes "anhelantes, ambiciosos y fuertes".12​ Miyazaki ha dicho que no quería crear una historia precisa acerca del Japón medieval, sino que en su lugar quería «retratar los comienzos del conflicto aparentemente insoluble entre el mundo natural y la civilización industrial moderna».13​ Los paisajes que aparecen en la película fueron inspirados por los bosques de Yakushima.14​ A pesar de que el filme está situado durante el período Muromachi, el período de tiempo real de la princesa Mononoke representa «un choque simbólico de tres razas proto-japonesas (Jōmon, Yamato y Emishi)».</p>
  </div>
</body>
</html>