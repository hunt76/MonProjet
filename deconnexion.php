<?php

// Suppression du cookie
setcookie('sid','', time() - 3600,'/','localhost',0,1);
header('location: index.php');
exit();
 ?>
