<?php
	
	$title = "Accueil";
	

	// gestion des contact 
	if (isset($_POST["Ajouter"])) {

		$nom= $_POST["nom"];
		$email= $_POST["email"];
		$tel= $_POST["tel"];
		$projet= $_POST["projet"];
		$details= $_POST["details"];

		$client= inscription($nom,$email,$tel,$projet,$details);

		if ($client) {

			$message= "Votre contact a été prise avec soin !";
			$type= "success";
			
		} else {

			$message= "Votre prise de contact a échoué !";
			$type= "danger";
		}
	}

	if(isset($_GET["id"])) {
        $bid = blogById($_GET["id"]);
    }
	

	require_once("Partials/header.php");
	
	require_once("Partials/navbar.php");

	require_once("Views/home.php");

	require_once("Partials/footer.php");

?>