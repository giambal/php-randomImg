<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

      $arrImg=["https://images.corsidia.com/ckeditor/pictures/data/000/000/086/content/immagini-e-tabelle-html-00.jpg",
      "https://images.corsidia.com/ckeditor/pictures/data/000/000/087/content/cicciogatto.jpg",
      "https://www.addestramentocaniblog.it/wp-content/uploads/2014/03/cane-paura-dell-acqua.gif",
      "https://cdn.pixabay.com/photo/2017/08/30/01/05/milky-way-2695569_1280.jpg"];

      $arrLen= count($arrImg);

      $randomImg = rand(0,$arrLen);

      echo "<img src='$arrImg[$randomImg]'>";

     ?>

  </body>
</html>
