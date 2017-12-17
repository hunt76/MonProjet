<?php

$is_connect= FALSE;

//si sid est poste
if(isset($_COOKIE['sid']) AND !empty($_COOKIE['sid'])) {

  $select_sid = "SELECT COUNT(*) as nb_sid, nom, prenom FROM utilisateurs WHERE sid = :sid GROUP BY nom, prenom";

  //verif bdd
  $sth = $bdd->prepare($select_sid);
  //securiser les paramètres
  $sth->bindValue(':sid', $_COOKIE['sid'], PDO::PARAM_STR);
 $sth->execute();
  $tab_result = $sth->fetch(PDO::FETCH_ASSOC);


  if ($tab_result['nb_sid'] >= 1){
      $is_connect = TRUE;
      $nom_connect = $tab_result['nom'];
      $prenom_connect = $tab_result['prenom'];
  }
}
 ?>
