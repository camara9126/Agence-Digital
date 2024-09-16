<?php
    session_start();
    require_once("Database/bdd.php");

    $contact= afficheContact();
    $admins= afficheAdmin();

    // pour les elements 
    $blogs= blogs();

    if (isset($_SESSION["admin"])) {
        $admin = $_SESSION["admin"];
    } else if (isset($_GET["admin"]) && $_GET["admin"] == "home") {
        $_GET["sunucode"] = "home";
    }


    if (isset($_GET["sunucode"])) {
        switch($_GET["sunucode"]) {
            case "home": //accueil
                require_once("Controllers/homeController.php");
                break;
            case "about": //a propos
                require_once("Views/about.php");
                break;
            case "blog": //blog
                require_once("Views/elements/blog.php");
                break;                    
            case "contact": //contact
                require_once("Views/elements/contact.php");
                break;
            case "project": //nos projets
                require_once("Views/elements/project.php");
                break;
            case "service": //services
                    require_once("Views/elements/service.php");
                    break;
            case "team": //equipe 
                    require_once("Views/team.php");
                    break;
            case "404": //erreur 404 
                    require_once("Views/elements/404.php");
                    break;
            case "temoin": //temoignage
                    require_once("Views/elements/temoin.php");
                    break;
            case "valid":
                    require_once("themes/flash.php");
                    break;
            default:
                unset($_GET["sunucode"]);
                return header("Location:index.php");
                break;
        }

    }elseif (isset($_GET["admin"])){
        // partie administrateur
        switch($_GET["admin"]) {
            case "home":
                require_once("admin/home.php");
                break;
            case "login":
                require_once("Controllers/loginController.php");
                break;
            case "contacts":
                require_once("Controllers/contactController.php");
                break;
            case "profil":
                require_once("Controllers/profilController.php");
                break;
                //pour les elements
            case "blog";
                require_once("Controllers/blogController.php");
                break;
            case "service";
                require_once("Controllers/serviceController.php");
                break;
            case "projet";
                require_once("Controllers/projetController.php");
                break;
            case "temoin";
                require_once("Controllers/temoinController.php");
                break;
            case "team";
                require_once("Controllers/teamController.php");
                break;
                //pour ajout/edit element
            case "forBlog";
                require_once("Controllers/forBlogController.php");
                break;
           
            case 'logout':
                session_destroy();
                header("Location:?sunucode=login");
                break;
            default:
                unset($_GET["admin"]);
                return header("Location:index.php");
                break;
        }
        
    } else {
        require_once("Controllers/homeController.php");
    }

?>

