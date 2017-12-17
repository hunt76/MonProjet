<?php
session_start();
require_once 'config/init.conf.php';
require_once 'config/bdd.conf.php';

include 'config/connexion.inc.php';

//class smarty
require_once('libs/Smarty.class.php');

//si on appuie sur le bouton submit
if (isset($_POST['submit'])) {
    //print_r($_POST);
    //print_r($_FILES);
    //print_r($_GET);

    //si le fichier Image est bien présent
    if ($_FILES['image']['error'] == 0) {

        $notification = "";
        $_SESSION['notification_result'] = FALSE;
         $date_du_jour = date("Y-m-d");

        //si le champ titre et texte ne sont pas vide
        if (!empty($_POST['titre']) AND ! empty($_POST['texte'])) {

            $publie = isset($_POST['publie']) ? $_POST['publie'] : 0;

                $insert = "INSERT INTO articles (titre,texte,date,publie)
              VALUES (:titre, :texte,:date, :publie)";



            //On prépare la requete et on sécurise les valeurs
            $sth = $bdd->prepare($insert);
            $sth->bindValue(':titre', $_POST['titre'], PDO::PARAM_STR);
            $sth->bindValue(':texte', $_POST['texte'], PDO::PARAM_STR);
            $sth->bindValue(':publie', $publie, PDO::PARAM_BOOL);
            $sth->bindValue(':date', $date_du_jour, PDO::PARAM_STR);

            //Si la requete est bonne
            if ($sth->execute() == TRUE) {

                //on prépare le dernier id de la base de donnée
                $id_article = $bdd->lastInsertId();
                $extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
                //tableau d'extensions
                $tab_extensions = array('jpg', 'png', 'jpeg');
                //Début des vérifications de sécurité...
                $result_extension_image = in_array($extension, $tab_extensions);


                //var_dump($result_extension_image);
                //exit();
                //on deplace le fichier
                move_uploaded_file($_FILES['image']['tmp_name'], 'img/' . $id_article . '.' . $extension);

                $notification = "Felicitation votre article est valide";
                $_SESSION['notification_result'] = TRUE;
                header('Location:index.php');
                exit();
            } else {
                $notification = "Une erreur est survenue lors de l'insertion de votre article";
                $_SESSION['notification_result'] = FALSE;
            }
        } else {
            $notification = "veuillez renseigner tous les champs obligatoires";
            $_SESSION['notification_result'] = FALSE;
        }
    } else {
        $notification = "Une erreur est survenue lors du traitement de l'image";
        $_SESSION['notification_result'] = FALSE;
    }
    $_SESSION['notification'] = $notification;

    header('location:article.php');
    exit();
}

    $smarty = new Smarty();

    $smarty->setTemplateDir('templates/');
    $smarty->setCompileDir('templates_c/');

    include('include/header.inc.php');
    $smarty->display('article.tpl');
    include('include/footer.inc.php');

    ?>
