<!-- Begin Page Content -->
    <div class="container-scroller">
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
            </div>
            <?php if(isset($_GET["type"]) && $_GET[ "type"] == "add") : ?>
                <?php require_once("admin/profil.php");?>
                <?php endif; ?>

            <?php if (isset($message)) : ?>
                <div class="alert alert-<?= $type ?> alert-dismissible fade show" role="alert">
                    <strong><?= $message ?></strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <div class="row ">
                <div class="card col-md-10">
                    <div class="card-header bg-success">
                        <div class="row">
                            <div class="col-md-10">
                                <h6 class="m-0 font-weight-bold text-white">Administrateur</h6>
                            </div>
                            <div class="col-md-2 text-right">
                                <a href="?admin=profil&type=add" class="btn btn-success btn-sm">Ajouter</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">

                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="">Prenom <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" value="<?= $_SESSION["admin"]->prenom ?>" name="prenom">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="">Nom<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" value="<?= $_SESSION["admin"]->nom ?>" name="nom">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="">Telephone<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" value="<?= $_SESSION["admin"]->telephone ?>" name="tel">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="">Email<span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" value="<?= $_SESSION["admin"]->email  ?>" name="email">
                                </div>
                            </div>
                            
                            <div class="row">    
                                <div class="col-md-6 form-group">
                                    <label for="">Fonction <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" value="<?= $_SESSION["admin"]->fonction  ?>" name="fonction">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="">Image profil <span class="text-danger">*</span></label>
                                    <img src="<?= "images/.".$_SESSION["admin"]->image ?> " alt="" width="100px" height="100px" class="img-thumbnail">
                                    <input type="file" class="form-control" value="<?= $_SESSION["admin"]->image  ?>" name="image">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="">Identifiant<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" value="<?= $_SESSION["admin"]->identifiant  ?>" name="identifiant">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="">Mot de passe <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" value="<?= $_SESSION["admin"]->mdp  ?>" name="mdp">
                                </div>
                            </div>
                            
                            <button type="submit" name="editer" class="btn btn-outline-success">Modifier</button>

                        </form>
                    </div>
                </div>
                <!-- <div class="ml-1 card col-md-4">
                    <div class="card-header bg-success">
                        <h6 class="text-white">Modification de Mot de passe</h6>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="">Ancien Mot de passe<span class="text-danger">*</span></label>
                                <input type="password" placeholder="Entrer votre ancien mot de passe" class="form-control" required name="password">
                            </div>
                            <div class="form-group">
                                <label for="">Nouveau Mot de passe<span class="text-danger">*</span></label>
                                <input type="password" placeholder="Entrer le nouveau mot de passe" class="form-control" required name="new_password">
                            </div>
                            <button type="submit" name="editPassword" class="btn btn-warning">Modifier</button>
                        </form>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>

