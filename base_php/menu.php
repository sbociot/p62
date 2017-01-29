<?php
$menu = array(
  'Acceuil' =>'index.php',
  'Shop' =>'catalogue.php',
  'Service' =>'servive.php',
  'Reservation' =>'formulaire.php',);

 ?>
 <main class="menu_principal">
   <nav>
     <h1>YS</h1>
     <h2>Electronic</h2>
     <?php foreach ($menu as $key => $value) {
       echo "<li>
       <a href=\"$value\">$key</a>
       </li>";
     } ?>
<form class="form-wrapper" action="search_result.php" method="post">
       <input type="text" id="search" placeholder="Search for..." required>
       <input type="submit" value="go" id="submit">
</form>
<?php require_once 'base_php/loginout_form.php' ?>
<li><a href="#"><i class="fa fa-cart-plus" style="font-size:35px;color:black"></i></a></li>
   </nav>
 </main>
