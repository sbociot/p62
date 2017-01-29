<?php

require_once 'base_php/check_connect.php';
//Tête de page
require_once'base_php/base_header.php';
//Menu principal
require_once'base_php/menu.php';
/****Contenu principal****/
require_once'file_base/dbacces.php';
//fin du body

define('ARTICLE_IMG_PATH', 'upload_images/');
// var_dump($_SERVER['QUERY_STRING']);
 ?>
<div class="image_en_tete">
  <img src="upload_images/computer.jpg" alt="computer" />
</div>
<h3>Nos Gadgets</h3>
<div class="wrapper">
<?php foreach ($myicon as $key => $value) {?>
  <a href="affiche.php?categorie=<?= $value['name'] ?>">
    <div class="main_cat">
    <ul>
      <li><?= $value['name'] ?></li>
      <li><img src="<?= ARTICLE_IMG_PATH,$value['image']?>" alt=""/></li>
    </ul>
  </div>
  </a>
<?php }  ?>
</div>
<?php require_once'base_php/page_end.php';  ?>
