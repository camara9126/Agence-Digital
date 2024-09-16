<?php


    $projet= projet();

    if(isset($_GET["id"])) {
        $pid= projetById($_GET['id']);
    }
    

    if(isset($_POST["Ajouter"])) {
        // extract($_POST);
        // var_dump($_POST);
        // die();

        $tmpName= $_FILES['image']['tmp_name'];
        
        $image= time().'.jpg';
        $size= $_FILES['image']['size'];
        $error= $_FILES['image']['error'];
        $tabExtension= explode('.', $image);
        $extension= strtolower(end($tabExtension));
        // tableau des extensions demandé
        $extensions= ['jpg','png','jpeg','jfif'];

        if (in_array($extension, $extensions)) {
            move_uploaded_file($tmpName, "images/.$image");

        }

        $projet= ajouterProjet($nom, $description, $image, $date_debut, $date_fin, $equipe, $ressources);
    }



    require_once("admin/projet.php");
?>