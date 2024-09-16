<?php
     try{
        $bdd = new PDO("mysql:dbname=acvision01;host=localhost", "root", "");
    } catch(PDOException $e){
        die("Erreur : ".$e->getMessage());
    }


    function inscription($nom,$email,$tel,$projet,$details) {
        global $bdd;
        try {
            $req= $bdd->prepare('INSERT INTO contact(id, nom, email, tel, projet, details) VALUES(null, :nom, :email, :tel, :projet, :details)');
           return $req->execute([
                'nom'=>$nom,
                'email'=>$email,
                'tel'=>$tel,
                'projet'=>$projet,
                'details'=>$details
           ]);

        } catch (PDOException $e) {
            die("Erreur : ".$e->getMessage());
        }
    }

    function login($identifiant,$mdp) {
        global $bdd;
        try {
            $req= $bdd->prepare('SELECT * FROM administrateur WHERE identifiant= :identifiant AND mdp= :mdp');
            $req->execute([
                "identifiant"=>$identifiant,
                "mdp"=>$mdp
            ]);
            return $req->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die("Erreur:".$e->getMessage());
        }
    }

    // fonction qui permet d'afficher tous les visiteurs
    function afficheContact(){
        global $bdd;
        try {
            $req = $bdd->prepare("SELECT * FROM contact");
            $req->execute();
    
            return $req->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die("Erreur:".$e->getMessage());
        }
    }

    // fonction qui permet d'afficher tous les admin
    function afficheAdmin(){
        global $bdd;
        try {
            $req = $bdd->prepare("SELECT * FROM administrateur ORDER BY nom ASC");
            $req->execute();

            return $req->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die("Erreur:".$e->getMessage());
        }
    }

    function contact() //les contacts
    {
        global $bdd;
        try {
            $req = $bdd->prepare("SELECT * FROM contact");

            $req->execute();

            return $req->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die("Erreur : " . $e->getMessage());
        }
    }

    function  allContactByStatut($statut) //contact avec statut 
    {
        global $bdd;
        try {
            $req = $bdd->prepare("SELECT * FROM contact
                    WHERE statut =:statut");

            $req->execute([
                "statut" => $statut
            ]);

            return $req->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die("Erreur : " . $e->getMessage());
        }
    }

    function editerAdmin($id, $prenom, $nom, $tel, $email, $name, $fonction, $identifiant, $mdp) {
        global $bdd;
        try {
            $req= $bdd->prepare("UPDATE administrateur 
            SET prenom= :prenom, nom= :nom, telephone= :telephone, email= :email, image= :image, fonction= :fonction, identifiant= :identifiant, mdp= :mdp
             WHERE id= :id");
             return $req->execute([
                'id' => $id,
                'prenom' => $prenom,
                'nom' =>$nom,
                'telephone' => $tel,
                'email' => $email,
                "image" => $name,
                'fonction' => $fonction,
                'identifiant' => $identifiant,
                'mdp' => $mdp
             ]);
        } catch (PDOException $e) {
            die("Erreur : " .$e->getMessage());
        }
    }


    function adminById($id){
        global $bdd;
        try {
            $req= $bdd->prepare("SELECT * FROM administrateur 
            WHERE id= :id");
            $req->execute([
                "id"=> $id
            ]);
            return $req->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die("Erreur : ".$e->getMessage());
        }
    }

    function infoContactById($id) {
        global $bdd;
        try {
            $req = $bdd->prepare("SELECT * FROM contact
                    WHERE id =:id");

            $req->execute([
                "id" => $id
            ]);

            return $req->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die("Erreur : " . $e->getMessage());
        }
    }

    function editerStatutContact($id, $statut) {
        global $bdd;
        try {
            $req = $bdd->prepare("UPDATE contact SET statut =:statut
            WHERE id=:id");
            return $req->execute([
                'id' => $id,
                'statut' => $statut,
            ]);
        } catch (PDOException $e) {
            die("Erreur : " . $e->getMessage());
        }
    }

    function supprimerContact($id)
    {
        global $bdd;
        try {
            $req = $bdd->prepare("DELETE FROM contact WHERE id =:id");
            return $req->execute([
                'id' => $id
            ]);
        } catch (PDOException $e) {
            die("Erreur : " . $e->getMessage());
        }
    }

    // fonction qui recupere un blog par son id
    function blogById($id) {
        global $bdd;
        try {
            $req = $bdd->prepare("SELECT * FROM blogs WHERE id= :id");
            $req->execute([
                "id" => $id
            ]);

            return $req->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die("Erreur : ".$e->getMessage());
        }
    }
    
    // fonction qui selectionne tous les blogs
    function blogs() {
        global $bdd;
        try {
            $req= $bdd->prepare("SELECT * FROM blogs ORDER BY id DESC");
            $req->execute();

            return $req->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die("Erreur :".$e->getMessage());
        }
    }

    //fonction qui ajoute un article de blog
    function addBlog($nom, $description, $datecreation, $categorie, $prenom_aut, $nom_aut) {
        global $bdd;
        try {
            $req= $bdd->prepare("INSERT INTO blogs(id, nom, description, datecreation, categorie, prenom_aut, nom_aut)
                                 VALUES(null, :nom, :description, :datecreation, :categorie, :prenom_aut, :nom_aut)");
            return $req->execute([
                "nom" => $nom,
                "description" => $description,
                "datecreation" => $datecreation,
                "categorie" => $categorie,
                "prenom_aut" => $prenom_aut,
                "nom_aut" => $nom_aut
            ]);
        } catch (PDOException $e) {
            die("Erreur :".$e->getMessage());
        }
    }

    //fonction qui modifie un article
    function editerBlog($id, $nom, $description, $categorie, $prenom_aut, $nom_aut) {
        global $bdd;
        try {
            $req= $bdd->prepare("UPDATE blogs SET nom= :nom, description= :description, categorie= :categorie, prenom_aut= :prenom_aut, nom_aut= :nom_aut
                                WHERE id= :id");
            return $req->execute([
                "id" => $id,
                "nom" => $nom,
                "description" => $description,
                "categorie" => $categorie,
                "prenom_aut" => $prenom_aut,
                "nom_aut" => $nom_aut
                ]);
        } catch (PDOException $e) {
            die("Erreur :".$e->getMessage());
        }
    }

    //fonction qui supprime un article par id
    function supprimerBlog($id) {
        global $bdd;
        try {
            $req= $bdd->prepare("DELETE FROM blogs WHERE id= :id");
            return $req->execute([
                "id" => $id
            ]);
        } catch (PDOException $e) {
            die("Erreur : ".$e->getMessage());
        }
    }

    // fonction qui selectionne les projets
    function projet() {
        global $bdd;
        try {
            $req= $bdd->prepare("SELECT * FROM projets");
            $req->execute();
            return $req->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die("Erreur : ".$e->getMessage());
        }
    }

    //fonction qui recupere un projet par son id
    // function projetById($id) {
    //     global $bdd;
    //     try{
    //         $req= $bdd->prepare("SELECT * FROM projets WHERE id= :id");
    //         $req->execute["
    //             "id" => $id
    //         "];
    //         return $req->fetch(PDO::FETCH_OBJ);
    //     } catch (PDOException $e) {
    //         die("Erreur ".$e->getMessage());
    //     }
    // }

    // fonction qui ajoute un projet
    function ajouterProjet($nom, $description, $image, $date_debut, $date_fin, $equipe, $ressources) {
        global $bdd;
        try {
            $req= $bdd->prepare("INSERT INTO projets(nom, description, image, date_debut, date_fin, equipe, ressources)
                                 VALUES(nom, :description, :image, :date_debut, :date_fin, :equipe, :ressources)");
            return $req->execute([
                "nom" => $nom,
                "description" => $description,
                "image" => $image,
                "date_debut" => $date_debut,    
                "date_fin" => $date_fin,
                "equipe" => $equipe,
                "ressources" => $ressources
                ]);
        } catch (PDOException $e) {
            die("Erreur : ".$e->getMessage());
        }
    }

    //fontionc qui modifie un projet
    function editerProjet($id, $nom, $description, $date_debut, $date_fin, $equipe, $ressources) {
        global $bdd;
        try {
            $req= $bdd->prepare("UPDATE projets SET nom= :nom, description= :description, date_debut= :date_debut, date_fin= :date_fin, equipe= :equipe, ressources= :ressources
                                WHERE id= :id");
            return $req->execute([
                "id" => $id,
                "nom" => $nom,
                "description" => $description,
                "date_debut" => $date_debut,
                "date_fin" => $date_fin,
                "equipe" => $equipe,
                "ressources" => $ressources,
            ]);
        } catch (PDOException $e) {
            die("Erreur :".$e->getMessage());
        }
    }

?>