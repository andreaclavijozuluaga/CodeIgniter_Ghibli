<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Mononoke hime</title>
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
    <img class="w3-image" src="<?php echo base_url().'assets/img/mononoke.gif' ?>" alt="Totoro durmiendo" width="1600" height="1060">
    <div class="w3-display-left w3-padding-large">
      <h1 class="w3-text-white" style="text-shadow: 3px 3px 2px #2F4F4F;
   color: #666;">La princesa Mononoke, もののけ姫</h1>
      <h1 class="w3-jumbo w3-text-white w3-hide-small" style="text-shadow: 3px 3px 2px #2F4F4F;
   color: #666;"><b>STUDIO GHIBLI</b></h1>
    </div>
  </header>
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide">ARGUMENTO</h2>
    <p class="w3-opacity"><i>La tierra natal de Ashitaka</i></p>
    <p class="w3-justify">El último príncipe emishi, Ashitaka, salva a su aldea del ataque de un Tatarigami, un demonio que destruye todo lo viviente con tan solo tocarlo. Usando su arco, Ashitaka le da muerte, siendo herido por este, dejando una oscura marca en su brazo. Al observar el cadáver del monstruo, Ashitaka descubre que en realidad era el dios jabalí Nago, quien fue corrompido hasta convertirse en un tatarigami. Ashitaka consulta a los ancianos de la aldea, temiendo por su vida al sospechar que la herida dejada por el demonio en su mano le haya transmitido su maldición. Estos descubren una enorme bola de hierro en el cuerpo de Nago y comprenden que era la causa de su sufrimiento, lo que llevó al dios a la locura. La anciana del pueblo explica al joven que aunque su herida solamente cubre su brazo, se extenderá por su cuerpo y huesos hasta que muera. La maldición es un arma de doble filo, porque en los momentos donde se deje llevar por el odio obtendrá una fuerza sobrehumana a cambio de que se propague más rápido. Cuando esto ocurre, su brazo se llena de gusanos negros retorciéndose, similares a los que tenía Nago.</p>
    <p class="w3-justify">La anciana, tras leer la fortuna de Ashitaka, vaticina que solo si viaja hacia el oeste en busca de la tierra natal de Nago y encuentra el lugar de donde proviene la misteriosa bola de hierro tendrá alguna posibilidad de encontrar una cura. También le advierte que durante su viaje deberá "ver con ojos carentes de odio". Al aceptar su destino tiene que aceptar también su exilio de su tierra natal, a la que no podrá volver nunca más, dejando a los emishi sin heredero. Ashitaka monta a Yakul, su leal alce rojo y se dispone a partir sin mirar atrás, ya que está mal visto en la aldea despedirse de alguien que parte al exilio. Solo una persona despide a Ashitaka, su hermana menor Kaya, quien le regala una daga de cristal que le pertenece para que no se olvide de ella.</p>
    <p class="w3-opacity"><i>Viaje a la ciudad de hierro</i></p>
    <p class="w3-justify">En su viaje hacia el oeste, Ashitaka ve cómo unos samuráis saquean un poblado indefenso. Ante tal injusticia, intenta distraerlos usando su arco, pero en ese momento se activa la maldición y le otorga a la flecha un poder sobrenatural. Aunque él solo pretendía distraer a los samuráis, la maldición hace que su disparo vaya con tal fuerza que le arranca los brazos a uno de ellos y decapita a otro. Tras esto, Ashitaka descubre que cuando la maldición aflora, la marca se extiende con mayor velocidad.</p>
    <p class="w3-justify">En la siguiente aldea se encuentra con un extraño monje, Jigo, quien fue salvado por Ashitaka durante el ataque anterior. Tras mostrarle el trozo de metal extraído de Nago, el monje le comenta que quizá encuentre respuestas en un lugar llamado la "ciudad de hierro". Mientras tanto, en una colina no muy lejana, una manada de kamis del clan del lobo2​asaltan a una caravana que transporta arroz a la ciudad de hierro. Uno de los lobos es montado por una joven, la princesa Mononoke. La líder de la manada, la diosa Moro, y madre de los otros lobos del grupo, recibe un disparo de Lady Eboshi, la dirigente de la ciudad de hierro, y a causa de este, la diosa cae rodando por la colina.</p>
    <p class="w3-justify">En su camino hacia la ciudad de hierro, Ashitaka pasa río abajo de la colina donde tuvo el lugar del combate y donde la corriente ha traído parte de las mercancías, así como muertos y heridos. El muchacho descubre a la manada, donde ve a la princesa Mononoke intentando aliviar la herida de Moro e intenta hablar con ella, pero esta solo le dice que se vaya. Algunos kodamas, o espíritus del bosque, aparecen y Ashitaka les pide ayuda. Ellos lo guían a través del bosque y lo conducen a él, y a dos heridos supervivientes a los que ayuda, a la ciudad de hierro.</p>
    <p class="w3-opacity"><i>La ciudad de hierro</i></p>
    <p class="w3-justify">Ashitaka finalmente llega a la ciudad de hierro, donde se encuentra con Lady Eboshi, quien le revela gran parte de los detalles relacionados con la razón de su maldición. La ciudad de hierro lleva mucho tiempo en guerra con los dioses del bosque debido a la tala de árboles para extraer el metal de las minas. Los dioses y animales, furiosos por la destrucción de su hábitat, han emprendido una guerra contra los humanos. Así, en una batalla entre el clan de los jabalíes y los humanos, Eboshi hirió con su arcabuz a Nago, originando dicha maldición. Ashitaka se enfada por el comportamiento destructivo de Eboshi, sobre todo porque le ha afectado a él. Más tarde, se da cuenta de que Eboshi ha creado en la ciudad de hierro una comunidad donde grupos socialmente repudiados, como los leprosos o las prostitutas, son tratados por igual, situación que solo podrá mantenerse si se continúa con la extracción del metal.</p>
  </div>
  <img class="w3-image" src="<?php echo base_url().'assets/img/paisaje_mononoke.jpg' ?>" alt="Totoro durmiendo" width="1600" height="1060">
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide">PRODUCCIÓN</h2>
    <p class="w3-opacity"><i>もののけ姫 Mononoke Hime</i></p>
    <p class="w3-justify">A finales de la década de 1970, Miyazaki dibujó bosquejos de una película sobre una princesa que vivía en el bosque con una bestia. Miyazaki comenzó a escribir el argumento de la película y dibujó los guiones gráficos iniciales para la cinta en agosto de 1994.7​ Sin embargo, tuvo dificultades para adaptar sus ideas y visualizaciones iniciales, debido a que varios elementos ya habían sido utilizados en Mi vecino Totoro, así como también a los cambios sociales ocurridos desde la creación de los primeros bocetos y guiones. Este suceso le llevaría a aceptar crear el video promocional para la canción On Your Mark del dúo musical Chage y Aska. De acuerdo con Toshio Suzuki, esto permitió a Miyazaki volver a iniciar la creación del filme con nuevos ánimos. En abril de 1995, el supervisor de animación Masashi Ando ideó los diseños de los personajes basándose en el guion gráfico de Miyazaki. En mayo de 1995, Miyazaki dibujó los guiones gráficos iniciales. Ese mismo mes, Miyazaki y Ando visitaron los antiguos bosques de Yakushima, en la isla de Kyūshū, que previamente también sirvieron de inspiración para el paisaje de Nausicaä del Valle del Viento, y las montañas de Shirakami-Sanchi en el norte de Honshu. Fueron acompañados por un grupo de directores artísticos, artistas de fondo y animadores digitales durante tres días.7​ La animación comenzó oficialmente en julio de 1995. Miyazaki personalmente supervisó cada uno de los 144 000 cm³ (centímetros cúbicos) de la película,8​ y se estima que se rediseñaron escenas de 80.000 de ellos.9​10​ Los guiones gráficos del final de la película fueron terminados apenas meses antes de la fecha de estreno en Japón.</p>
    <p class="w3-justify">Inspirado por el director irlandés-estadounidense John Ford, quien es conocido por sus películas del medio oeste, Miyazaki creó la ciudad de hierro como una «ciudad de gente muy unida» y la pobló con «personajes de grupos marginados y minorías oprimidas que rara vez aparecen en películas japonesas», siendo también personajes "anhelantes, ambiciosos y fuertes".12​ Miyazaki ha dicho que no quería crear una historia precisa acerca del Japón medieval, sino que en su lugar quería «retratar los comienzos del conflicto aparentemente insoluble entre el mundo natural y la civilización industrial moderna».13​ Los paisajes que aparecen en la película fueron inspirados por los bosques de Yakushima.14​ A pesar de que el filme está situado durante el período Muromachi, el período de tiempo real de la princesa Mononoke representa «un choque simbólico de tres razas proto-japonesas (Jōmon, Yamato y Emishi)».</p>
  </div>
</body>
</html>