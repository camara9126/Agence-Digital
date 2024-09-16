<?php

    $title= "Aricle";
    
    if(isset($_GET["id"])) {
            $bid = blogById($_GET["id"]);
    }

    
     if(isset($_POST["Ajouter"])) {
        extract($_POST);
        // var_dump($_POST);
        // die();
        if($ab= addBlog($nom, $description, $datecreation, $categorie, $prenom_aut, $nom_aut)) {
            return header("Location: ?admin=blog");
        }
    }

    //modification article
    if(isset($_POST["Editer"])) {
        extract($_POST);
        // var_dump($_POST);
        // die();
        $bid= blogById($_GET["id"]);
        
        if($ab= editerBlog($bid->id, $nom, $description, $categorie, $prenom_aut, $nom_aut)) {
            return header("Location: ?admin=blog");
        }
    }


    if (isset($_GET["delete"])) {
        if (supprimerBlog($_GET["delete"])) {
            return header("Location:?admin=blog");
        }
    }


    


    

    require_once("admin/blog.php");


?>


    
    

