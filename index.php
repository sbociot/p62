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
<?php require_once 'base_php/loginout_form.php' ?>

<?php require_once'base_php/page_end.php';  ?>
