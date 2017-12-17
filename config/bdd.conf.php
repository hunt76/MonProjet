<?php
try {
    /* @var $bdd PDO */
    $bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '123456');
    $bdd->exec("set names utf8");
    $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

} catch (Exception $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>
