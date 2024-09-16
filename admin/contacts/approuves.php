<?php
    require_once("themes/header.php");
    require_once("themes/navbar.php");
    require_once("themes/sidebar.php");
?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <?php if (isset($_GET["info"])) : ?>
        <?php require_once("admin/contacts/info.php"); ?>
    <?php else : ?>
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
    </div>

        <!-- Content Row -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 bg-success">
                <div class="row">
                    <div class="col-md-9">
                        <h4 class="m-0 font-weight-bold text-white">Contacts approuvés</h4>
                    </div>
                    <div class="col-md-3">
                    <h4 class="m-0 font-weight-bold text-danger"><?= count($validctcs) ?></h4>
                    </div>
                </div>
                
            </div>
            <div class="card-body">
                <div class="table-responsive ">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th><b>Details</b></th>
                                <th><b>Nom</b></th>
                                <th><b>Tel</b></th>
                                <th><b>Email</b></th>
                                <th><b>Projet</b></th>
                                <th><b>Description</b></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($validctcs as $n) : ?>
                                <tr>
                                    <td>
                                        <a href="?admin=contacts&type=approuve&info=<?= $n->id ?>" class="btn btn-outline-info btn-round btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        <a class="btn btn-outline-danger btn-sm" href="#" data-toggle="modal" data-target="#delete" title="supprimer">
                                            <i class="fa fa-times"></i>
                                        </a>
                                        <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Êtes-vous sûr?</h5>
                                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">X</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">De vouloir supprimer.</div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
                                                        <a class="btn btn-danger" href="?admin=contacts&delete=<?= $n->id ?>">Supprimer</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><?= $n->nom ?></td>
                                    <td><?= $n->tel ?></td>
                                    <td><?= $n->email ?></td>
                                    <td><?= $n->projet ?></td>
                                    <td><?= $n->details ?></td>
                                    
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
        <!-- Content Row -->
    <?php endif; ?>


</div>
<!-- /.container-fluid -->


<?php
    require_once("themes/footer.php");
?>