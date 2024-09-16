<?php
    require_once("themes/header.php");
    require_once("themes/navbar.php");
    require_once("themes/sidebar.php");
?>

    <div class="container card ">
        <div class="card-header bg-success">
            <div class="row">
                <div class="col-md-10">
                    <h6 class="m-0 font-weight-bold text-white">Informations Client</h6>
                </div>
                <div class="col-md-2 text-md-right">
                    <a href="?admin=contacts&type=<?= $_GET["type"] ?>" class="btn btn-sm btn-warning">Retour</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <?php if (isset($message)) : ?>
                <div class="text-center alert alert-<?= $type ?>">
                    <?= $message ?>
                </div>
            <?php endif; ?>
            <form action="" method="post">
                <input type="hidden" value="<?= $info->id ?>" name="id">

                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="">Nom complet </label>
                        <input type="text" readonly value="<?= $info->nom ?>" required name="nom" class="form-control">
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="">Email </label>
                        <input type="email" readonly value="<?= $info->email ?>" required name="email" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="">N° Téléphone </label>
                        <input type="text" readonly value="<?= $info->tel ?>" required name="tel" class="form-control">
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="">Statut </label>
                        <select name="statut" readonly required id="" class="form-control">
                            <option value="0" <?= $info->statut == 0 ? "selected" : '' ?>>Nouveau</option>
                            <option value="1" <?= $info->statut == 1 ? "selected" : '' ?>>Approuvé</option>
                            <option value="2" <?= $info->statut == 2 ? "selected" : '' ?>>Rejeté</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Projet </label>
                        <input type="text" readonly value="<?= $info->projet ?>" name="projet" id="" class="form-control">
                    </div> 
                    <div class="col-md-6">
                        <label for="">Description </label> <br>
                        <textarea name="details" readonly rows="5" cols="50" id=""><?= $info->details ?></textarea>
                    </div>
                </div>
                <hr>  
                <!-- <button type="submit" id="adrv" name="editer" class="btn btn-outline-success">Modfier</button> -->
            </form>
        </div>
    </div>
</div>

<?php
    require_once("themes/footer.php");
?>