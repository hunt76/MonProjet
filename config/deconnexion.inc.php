<?php

// Suppression du cookie
setcookie('sid',"", -1);
header('location: ../index.php');
exit();
 ?>
