<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1><?=$titulo?></h1>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam nulla laborum cupiditate corporis repellendus. Commodi suscipit officiis, similique mollitia enim, nostrum voluptas fugiat ut, saepe illo aliquam quae doloremque totam.</p>
  <h3>Lista de colores</h3>
  <?php
  foreach($lista as $item):
  ?>
  <li><?= $item?></li>
  <?php
  endforeach;
  ?>
</body>
</html>