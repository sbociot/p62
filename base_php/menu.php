<?php
$menu = array(
  'Acceuil' =>'index.php',
  'Shop' =>'catalogue.php',
  'Deal' => 'deal.php',
  'Service' =>'servive.php',
    'Reservation' =>'formulaire.php',);
 ?>
 <main class="menu_principal">
   <nav>
     <?php foreach ($menu as $key => $value) {
       echo "<li>
       <a href=\"$value\">$key</a>
       </li>";
     } ?>
   </nav>
 </main>
