<?php
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
<main>
  <div class="shop_by_categorie">
      <ul class="view_by_categorie">
        <?php foreach ($myicon as $key => $value) {?>
        <a href="?<?= $value['name']?>"><li>
          <ul class="categorie_aff">
            <li><img class="icon_font" src="<?=  ARTICLE_IMG_PATH,$value['image']?>" alt="<?=utf8_encode($value['name'])?>">
            <li><?=utf8_encode($value['name'])?></li>
          </ul>
        </li></a>
        <?php }?>
      </ul>
  </div>
  <div class="rapid_nav">
    <ul>

    </ul>
  </div>
</main>
<?php require_once'base_php/page_end.php';  ?>
