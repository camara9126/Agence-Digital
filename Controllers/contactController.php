<?php


    $ctcs = contact();
    $newctcs = allContactByStatut(0);
    $validctcs = allContactByStatut(1);
    $rejetctcs = allContactByStatut(2);

    // Modification des prises de decisions de contacts
    if (isset($_GET["valid"])) {
        if (editerStatutContact($_GET["valid"], 1)) {
            return header("Location: ?admin=contacts&type=approuve");
        }
    }

    if (isset($_GET["rejet"])) {
        if (editerStatutContact($_GET["rejet"], 2)) {
            return header("Location: ?admin=contacts&type=rejete");
        }
    }

    if (isset($_GET["delete"])) {
        if (supprimerContact($_GET["delete"])) {
            return header("Location: ?admin=contacts&type=new");
        }
    }

    if (isset($_GET["info"])) {
        $info = infoContactById($_GET["info"]);
        require_once("admin/contacts/info.php");
    }

   


    // liens vers les types de contact 
    if ($_GET["type"] == "approuve") {
        $title = "Approuvés";
        require_once("admin/contacts/approuves.php");

    } else if ($_GET["type"] == "rejete") {
        $title = "Rejetés";
        require_once("admin/contacts/rejetes.php");

    } else {
        $title = "nouveaux";
        require_once("admin/contacts/nouveaux.php");
    }



?>