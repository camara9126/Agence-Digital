<?php
     require_once("themes/header.php");
     require_once("themes/navbar.php");
     require_once("themes/sidebar.php");
?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
            </div>
            <div class="row ">
                <div class="card col-md-10">
                    <div class="card-header bg-primary">
                        <div class="row">
                            <div class="col-md-9">
                                <h5 class="m-0 font-weight-bold text-white"><?=$title?></h5>
                            </div>
                            <div class="col-md-2 text-md-right">
                                <a href="?admin=projet" class="btn btn-sm btn-warning">Retour</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">

                            <div class="row">
                                <div class="col-md-6 form-group text-center">
                                    <label for="">Nom Projet <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control text-center" value="" name="nom">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group text-center">
                                    <label for="">Description<span class="text-danger">*</span></label><br>
                                     <textarea name="description" id="" cols="50" rows="5"></textarea>
                                </div>
                                <div class="col-md-6 form-group text-center">
                                    <label for="">Image<span class="text-danger">*</span></label>
                                    <input type="file" class="form-control" value="" name="image">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group text-center">
                                    <label for="">Date Debut<span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" value="" name="date_debut">
                                </div>
                                <div class="col-md-6 form-group text-center">
                                    <label for="">Date Fin<span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" value="" name="date_fin">
                                </div>
                            </div>
                                
                            <div class="row">    
                                <div class="col-md-6 form-group text-center">
                                    <label for="">Equipe <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control text-center" value="" name="equipe">
                                </div>
                                <div class="col-md-6 form-group text-center">
                                    <label for="">Ressource<span class="text-danger">*</span></label>
                                    <textarea cols="50" rows="5" name="ressource"></textarea>
                                </div>
                            </div>

                            <button type="submit" name="Ajouter" class="btn btn-outline-success">Ajouter</button>

                        </form>
                    </div>


<?php
    require_once("themes/footer.php");
?>