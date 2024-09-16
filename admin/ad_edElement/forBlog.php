<?php
     require_once("themes/header.php");
     require_once("themes/navbar.php");
     require_once("themes/sidebar.php");
?>

          <div class="row ">
                <div class="card col-md-10 mb-5">
                    <div class="card-header bg-primary">
                        <div class="row">
                            <div class="col-md-10">
                                <h5 class="m-0 font-weight-bold text-white"><?=isset($bid)? "Article":"Formulaire d'ajout d'article"?></h5>
                            </div>
                            <div class="col-md-2 text-md-right">
                                <a href="?admin=blog" class="btn btn-sm btn-warning">Retour</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                            <form action="" method="post">

                                <div class="row">
                                    <div class="col-md-6 form-group text-center">
                                        <label for="">Categorie <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control text-center" value="<?=isset($bid)?$bid->categorie:''?>" name="categorie" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group text-center">
                                        <label for="">Titre<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" value="<?=isset($bid)?$bid->nom:''?>" name="nom" required>
                                    </div>
                                    <div class="col-md-6 form-group text-center">
                                        <label for="">Date de creation<span class="text-danger">*</span></label>
                                        <input type="<?=isset($bid)?'text':''?>date" class="form-control text-center" value="<?=isset($bid)?$bid->datecreation:''?>" name="datecreation" required>
                                    </div>
                                </div>
                                    <div class="row">    
                                        <div class="col-md-6 form-group text-center">
                                            <label for="">Prenom auteur <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control text-center" value="<?=isset($bid)?$bid->prenom_aut:''?>" name="prenom_aut" required>
                                        </div>
                                        <div class="col-md-6 form-group text-center">
                                            <label for="">Nom auteur<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control text-center" value="<?=isset( $bid)?$bid->nom_aut:''?>" name="nom_aut" required>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 form-group text-center">
                                            <label for="">Description<span class="text-danger">*</span></label><br>
                                            <textarea name="description" id="" cols="90" rows="50" required>
                                                <?=isset($bid)?$bid->description:''?>
                                            </textarea>
                                        </div>
                                    </div>
                                <?php if(isset($bid)): ?>
                                    <button type="submit" name="Editer" class="btn btn-outline-warning">Modifier</button>
                                    <a href="?admin=blog&delete=<?=$bid->id?>"  class="btn btn-outline-danger">Supprimer</a>
                                    <?php else: ?>
                                    <button type="submit" name="Ajouter" class="btn btn-outline-success">Ajouter</button>
                                <?php endif; ?>
                                </form>
                    </div>
                </div>
          </div>

<?php
    require_once("themes/footer.php");
 ?>