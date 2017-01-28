<?php
//Tête de page
require_once'base_php/base_header.php';
//Menu principal
require_once'base_php/menu.php';
/****Contenu principal****/
require_once'file_base/dbacces.php';
//fin du body
require_once'base_php/page_end.php';
define('ARTICLE_IMG_PATH', 'upload_images/');

 ?>
<main>
  <div class="shop_by_categorie">
    <?php foreach ($myicon as $key => $value) {?>
      <ul>
        <li><?=utf8_encode($value['name'])?></li>
        <li><img src="<?=  ARTICLE_IMG_PATH,$value['image']?>" alt="<?=utf8_encode($value['name'])?>">
      </ul>

     <?php }?>
  </div>
</main>
