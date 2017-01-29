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
// var_dump($article['categorie']);
// if(array_key_exists('nom', $_GET) && in_array($_GET['nom'], $data)){
//   echo "yes the is a key ";
// }else {
//   echo "error";
// }

// var_dump($data);
// var_dump($article['categorie']);
foreach ($data as $key => $value) {
  if (array_key_exists('categorie', $_GET) && in_array($_GET['categorie'], $value)) {
        echo
        $value['name']
        ;
  }
}


 ?>
