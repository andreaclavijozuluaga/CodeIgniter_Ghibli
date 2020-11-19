<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Totoro</title>
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
    <img class="w3-image" src="<?php echo base_url().'assets/img/totoro_lluvia.gif' ?>" alt="Totoro durmiendo" width="1600" height="1060">
    <div class="w3-display-left w3-padding-large">
      <h1 class="w3-text-white" style="text-shadow: 3px 3px 2px #2F4F4F;
   color: #666;">Mi vecino Totoro, となりのトトロ</h1>
      <h1 class="w3-jumbo w3-text-white w3-hide-small" style="text-shadow: 3px 3px 2px #2F4F4F;
   color: #666;"><b>STUDIO GHIBLI</b></h1>
    </div>
  </header>
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide">ARGUMENTO</h2>
    <p class="w3-opacity"><i>となりのトトロ</i></p>
    <p class="w3-justify">Japón, año 1958. El profesor universitario Tatsuo Kusakabe y sus dos hijas, Satsuki y Mei, se trasladan a una antigua residencia rural para estar más cerca del hospital donde la madre de las niñas, Yasuko, se recupera de tuberculosis. Satsuki y Mei descubren que la casa está habitada por diminutas criaturas de hollín llamadas susuwatari —espíritus pequeños, oscuros y similares al hollín que viven en lugares abandonados—. Cuando las niñas y su padre se sienten cómodos en su nueva casa y los susuwatari observan que son personas buenas, estos abandonan la residencia, presumiblemente en busca de otro sitio para vivir. Un día, Mei observa a una criatura similar a un conejo blanco y lo sigue por debajo de la casa. Luego descubre que en realidad se trata de un pequeño espíritu, que junto a otra criatura la conducen a través de un camino del bosque y posteriormente hasta el hueco de un gran árbol de alcanfor. Allí, conoce y se hace amiga de una versión mucho más grande del mismo tipo de espíritu, a quien ella identifica como "Totoro" en base de una serie de rugidos que este emite. Mei cae dormida, y al despertar se encuentra de nuevo en el patio de su casa. A pesar de sus muchos intentos, Mei es incapaz de mostrar el árbol de Totoro a su familia. Su padre la conforta diciéndole que Totoro era el "guardián del bosque" y que se dejaría ver cuando él lo quisiera.</p>
    <p class="w3-justify">Una noche de lluvia, las niñas se proponen a esperar el autobús de su padre y se preocupan cuando este no arriba. Mientras esperan, Mei se duerme y Totoro aparece junto a ellas, con Satsuki viéndolo por primera vez. Totoro solo tiene una hoja en la cabeza para protegerse de la lluvia, por lo que Satsuki le ofrece el paraguas que había llevado para su padre. Totoro queda encantado tanto con el paraguas como por los sonidos hechos por gotas de lluvia. A cambio, le da un manojo de nueces y semillas a las niñas. Un autobús con la forma de un gato gigante se detiene en la parada y Totoro se aleja en él. Poco después, llega el autobús de su padre.</p>
    
  </div>
  <img class="w3-image" src="<?php echo base_url().'assets/img/totoro_3.jpg' ?>" alt="Totoro durmiendo" width="1600" height="1060">
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide">PRODUCCIÓN</h2>
    <p class="w3-opacity"><i>となりのトトロ</i></p>
    <p class="w3-justify">El director artístico del filme fue Kazuo Oga, el cual dibujó y diseñó a Totoro cuando Hayao Miyazaki le enseñó una imagen de Totoro encima de una montaña. Miyazaki quiso darle una oportunidad a Oga de elevar sus estándares, que se lo tomó como un reto a su carrera y experiencia artística. Gracias a Mi vecino Totoro, la carrera de Oga gozó de una mayor popularidad y prestigio. Miyazaki y Oga debatieron cuál iba a ser la paleta de colores de Mi vecino Totoro. Oga se decantaba por colores más tenues que recordaran a la prefectura de Akita, mientras que Miyazaki prefería unos tonos más cálidos para que los colores se asemejaran más a la región de Kantō; al final terminó siendo una mezcla de ambos. Toshio Suzuki, productor principal de Studio Ghibli, afirmó que "era la naturaleza pintada con colores translúcidos"..</p>
    <p class="w3-justify">El enfoque meticuloso de Oga en el filme hizo que el diario International Herald Tribune definiera su estilo como "[actualizando] la tradicional percepción animista que los japoneses tienen de una naturaleza totalmente y espiritualmente viva".</p>
  </div>
  <img class="w3-image" src="<?php echo base_url().'assets/img/paisaje_totoro.jpg' ?>" alt="Totoro durmiendo" width="1600" height="1060">
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide">PERSONAJES</h2>
    <p class="w3-opacity"><i>となりのトトロ</i></p>
    <p class="w3-justify">Los nombres de las niñas hacen referencia al mes de mayo. Mei (メイ) es la transcripción fonética de may en inglés, mientras que Satsuki (サツキ) era el nombre que recibía antiguamente en Japón el quinto mes. En la idea original, solo aparecía una niña de seis años, pero se decidió desdoblar el personaje en dos hermanas. Esto causó algunas confusiones entre los fanáticos, quienes en más de una ocasión se encontraron con imágenes y afiches donde Totoro espera al gatobús en compañía de una pequeña que no aparece en el filme.</p>
    <p class="w3-justify"><strong>Satsuki Kusakabe</strong> (草壁 サツキ Kusakabe Satsuki?): Con once años de edad, es la hermana mayor de Mei, quien trata de cuidar de ella al mismo tiempo que intenta adaptarse a su nuevo entorno y asimila la enfermedad que sufre su madre; todo esto hace que empiece a madurar muy pronto.</p>
    <p class="w3-justify"><strong>Mei Kusakabe</strong> (草壁 メイ Kusakabe Mei?): La menor de las hermanas Kusakabe, de cuatro años de edad. Alegre y curiosa, gracias a ella descubrieron a Totoro. Debido a la ausencia de su madre, busca constantemente la atención de su hermana mayor. En el doblaje original, Mei pronuncia mal las palabras, por eso dice Totoro en vez de decir torōru que es como se pronuncia troll en japonés.</p>
    <p class="w3-justify"><strong>Tatsuo Kusakabe</strong> (草壁達夫 Kusakabe Tatsuo?): Es el padre de las niñas y marido de Yasuko. Trabaja en el departamento de arqueología y antropología de la Universidad de Tokio. Siempre se muestra alegre con sus hijas.</p>
    <p class="w3-justify"><strong>Yasuko Kusakabe</strong> (草壁靖子 Kusakabe Yasuko?): La madre de las niñas y esposa de Tatsuo. Debido a que padece de tuberculosis es trasladada a un hospital rural. Su marido y sus hijas se mudan al campo para estar más cerca de ella. Al igual que la señora Kusakabe, la madre de Miyazaki, en 1947, padeció tuberculosis espinal, lo que la mantuvo hospitalizada durante nueve años aproximadamente.</p>
    <h3 class="w3-wide">TOTOROS</h3>
    <p class="w3-opacity"><i>となりのトトロ</i></p>
    <p class="w3-justify">Los Totoro (トトロ?) son tres espíritus del bosque que habitan en el interior de un gigantesco árbol milenario, más específicamente, en un alcanforero.</p>
    <p class="w3-justify"><strong>Gran Totoro</strong> (大トトロ Dai-Totoro?): El de mayor tamaño, de color gris y el más conocido de los tres.</p>
    <p class="w3-justify"><strong>Totoro mediano</strong> (中トトロ Chū-Totoro?): De color azul.</p>
    <p class="w3-justify"><strong>Pequeño Totoro</strong> (小トトロ Chibi-Totoro?): De color blanco, similar a un roedor.</p>
  </div>
  <iframe width="1260" height="1060" src="https://www.youtube.com/embed/qMZFau7LZUA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</body>
</html>