<?php
    require_once("themes/header.php");
    require_once("themes/navbar.php");
    require_once("themes/sidebar.php");

    
    $title = "Mon Profil";

    // $_SESSION["admin"]= login($identifiant,$mdp);

    if (isset($_POST["editer"])) {
        extract($_POST);
        // var_dump($_POST);
        // die();
        $tmpName= $_FILES['image']['tmp_name'];
        
        $name= time().'.jpg';
        $size= $_FILES['image']['size'];
        $error= $_FILES['image']['error'];
        $tabExtension= explode('.', $name);
        $extension= strtolower(end($tabExtension));
        // tableau des extensions demandé
        $extensions= ['jpg','png','jpeg','jfif'];

        if (in_array($extension, $extensions)) {
            move_uploaded_file($tmpName, "images/.$name");

        if (editerAdmin($_SESSION["admin"]->id, $prenom, $nom, $tel, $email, $name, $fonction, $identifiant, $mdp)) {
            $message = "Modification avec success";
            $type = "success";

            $_SESSION["admin"]= adminById($admin->id);

        } else {
            $message = "Erreur de modification";
            $type = "danger";
        }
        }
    }

    
    require_once("admin/profil.php");
    require_once("themes/footer.php");
?>