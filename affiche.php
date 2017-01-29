<?php
require_once'file_base/dbacces.php';
require_once 'base_php/check_connect.php';
//Tête de page
require_once'base_php/base_header.php';
//Menu principal
require_once'base_php/menu.php';
/****Contenu principal****/

define('ARTICLE_IMG_PATH', 'upload_images/');
var_dump($_GET['categorie']);
 ?>
 <h2 id="query_title"><?=$_GET['categorie']?></h2>
<div class="main_result">

  <?php
  foreach ($data as $key => $value) {
    if (array_key_exists('categorie', $_GET) && in_array($_GET['categorie'], $value)) {?>
      <div class="wrapper_query_image">
      <div class="query_image">
        <img src="<?= ARTICLE_IMG_PATH,$value['image']?>" alt="<?=$value['name']?>"/>
      </div>
      <ul class="your_result">
        <li><?=$value['name']?></li>
        <li><?=$value['descript1']?></li>
        <li><?=$value['descript2']?></li>
        <li><?=$value['descript3']?></li>
        <li><?=$value['descript4']?></li>
        <li><?=$value['price']?></li>
      </ul>
      </div>
  <?php }
} ?>



</div>
