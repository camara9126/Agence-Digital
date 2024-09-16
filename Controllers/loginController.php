<?php
    
    
    if (isset($_POST["connecter"])) {
        
        $identifiant = $_POST["identifiant"];
        $mdp = $_POST["mdp"];
    
        $admin = login($identifiant, $mdp);
    
        if ($admin) {
            $_SESSION["admin"] = $admin;
            header("Location:?admin=home");
            exit;
        } else {
            $message = "Identifiant ou mot de passe incorrect";
        }
    }
    
    require_once("themes/header.php");
    require_once("admin/login.php");
    require_once("themes/footer.php");
?>
