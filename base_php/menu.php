<?php
$menu = array(
  'Acceuil' =>'index.php',
  'Shop' =>'catalogue.php',
  'Service' =>'servive.php',
  'Reservation' =>'formulaire.php',);

 ?>
 <main class="menu_principal">
   <nav>
     <img id="logo" src="upload_images/logoys.png" alt="">
     <?php foreach ($menu as $key => $value) {
       echo "<li>
       <a href=\"$value\">$key</a>
       </li>";
     } ?>
<form class="form-wrapper" action="search_result.php" method="post">
       <input type="text" id="search" placeholder="Search for..." required>
       <input type="submit" value="go" id="submit">
</form>
   </nav>
 </main>
