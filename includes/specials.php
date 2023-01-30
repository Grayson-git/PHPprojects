<?php

$today = date('l'); 

  echo '<h3>',$today,' Specials</h3>';
  echo '<ul>';
    if ($today == 'Monday') {
      echo '<li>Club Sandwich</li>';
      echo '
      <img src="images/club.jpg" alt="Club Sandwich" width="100" height="100">';
    } elseif ($today == 'Tuesday') {
      echo '<li>Pico de Gallo</li>';
      echo '
      <img src="images/pico.jpg" alt="Pico de Gallo" width="100" height="100">';
    } elseif ($today == 'Wednesday') {
      echo '<li>Salad</li>';
      echo '
      <img src="images/fishchips.jpg" alt="Salad" width="100" height="100">';
    } elseif ($today == 'Thursday') {
      echo '<li>Fish and Chips</li>';
      echo '
      <img src="images/fishchips.jpg" alt="Fish and Chips" width="100" height="100">';
    } elseif ($today == 'Friday') {
      echo '<li>Pizza</li>';
      echo '
      <img src="./images/fishchips.jpg" alt="Pizza" width="100" height="100">';
    }
  echo '</ul>';

?>
