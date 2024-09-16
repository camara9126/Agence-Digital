<?php

    
    $ctc = contact();
    $newctc = allContactByStatut(0);
    $validctc = allContactByStatut(1);
    $rejetctc = allContactByStatut(2);

    require_once("themes/header.php");
    require_once("themes/navbar.php");
    require_once("themes/sidebar.php");
    
?>

        <div class="d-xl-flex justify-content-between align-items-start">
            <h2 class="text-dark font-weight-bold mb-2"> Accueil </h2>

        </div>
            <div class="d-sm-flex justify-content-between align-items-center transaparent-tab-border {">


            </div>
            <div class="tab-content tab-transparent-content">
                <div class="tab-pane fade show active" id="business-1" role="tabpanel" aria-labelledby="business-tab">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-sm-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body text-center">
                                    <h3 class="mb-2 text-dark font-weight-normal">Nouveau</h3>
                                    <h2 class="mb-4 text-dark font-weight-bold">
                                        <?php if(isset($newctc) && count($newctc) == 0): ?>
                                            <?= count($newctc) ?>
                                        <?php else: ?>
                                            <a href="?admin=contacts&type=nouveaux"><?= count($newctc) ?></a></h2>
                                        <?php endif; ?>
                                    </h2>
                                    <div
                                        class="dashboard-progress dashboard-progress-1 d-flex align-items-center justify-content-center item-parent">
                                        <i class="mdi mdi-speedometer icon-md absolute-center text-dark"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-sm-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body text-center">
                                    <h3 class="mb-2 text-dark font-weight-normal">Aprouvés</h3>
                                    <h2 class="mb-4 text-dark font-weight-bold">
                                        <?php if(empty($validctc)): ?>
                                            <?= count($validctc) ?>
                                        <?php else: ?>
                                            <a href="?admin=contacts&type=approuve"><?= count($validctc) ?></a>
                                        <?php endif; ?>
                                    </h2>
                                    <div
                                        class="dashboard-progress dashboard-progress-2 d-flex align-items-center justify-content-center item-parent">
                                        <i class="mdi mdi-animation icon-md absolute-center text-dark"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-sm-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body text-center">
                                    <h3 class="mb-2 text-dark font-weight-normal">Rejetés</h3>
                                    <h2 class="mb-4  text-dark font-weight-bold">
                                        <?php if(empty($rejetctc)): ?>
                                            <?= count($rejetctc) ?></a>
                                        <?php else: ?>
                                            <a href="?admin=contacts&type=rejete"><?= count($rejetctc) ?></a>
                                        <?php endif; ?>
                                        </h2>
                                    <div
                                        class="dashboard-progress mb-5 pb-3 dashboard-progress-4 d-flex align-items-center justify-content-center item-parent">
                                        <i class="mdi mdi-account-multiple icon-md absolute-center text-dark"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
        require_once("themes/footer.php");
    ?>