<?php 
  // Get and display day of the week
  $day = date('l', time());

  echo '<p>Today is '.$day.'</p>';

  // Put in some more code.
  for($i = 1; $i <= 10; $i++)
  {
  	echo $i.(($i < 10) ? '<br />': '');
  }


?>