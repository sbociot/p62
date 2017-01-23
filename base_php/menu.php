<?php
$menu = array(
  'Acceuil' =>'index.php',
  'Shop' =>'shop.php',
  'Deal' => 'deal.php',
  'Service' =>'servive.php',);
 ?>
 <main class="menu">
   <nav>
     <?php foreach ($menu as $key => $value) {
       echo "<li>
       <a href=\"$value\">$key</a>
       </li>";
     } ?>
   </nav>
 </main>
